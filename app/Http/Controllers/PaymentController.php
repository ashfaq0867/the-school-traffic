<?php

namespace App\Http\Controllers;

use App\Models\County;
use App\Models\Course;
use App\Models\CourseAddon;
use App\Models\Court;
use App\Models\LeaCode;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Laravel\Cashier\Cashier;

class PaymentController extends Controller
{

    public function index(Request $request)
    {

        $id = $request->id;

        $certificate = $request->certificate ?? [];
        $verify = $request->verify ?? [];

        $get_addon_ids = array_merge($certificate, $verify);

        $course = Course::with([
            'addons' => function ($addon) use ($get_addon_ids) {
                if ($get_addon_ids) {
                    $addon->whereIn('course_addons.id', $get_addon_ids);
                }
            }
        ])
            ->where('id', $id)
            ->first();


        $total = $course->price;
        foreach ($course->addons as $add) {
            $total += $add->addon_price;
        }
        $total = number_format($total, 2);


        $user = auth()->user();
        $send = [
            'user' => $user,
            'intent' => $user->createSetupIntent(),
            'product' => $course->id,
            'price' => $total,
            'course' => $course,
            'total' => $total,
            'request' => serialize($request->all())
        ];

        return view('payments.index', $send);
    }

    public function addon(Request $request)
    {
        $id = $request->id;
        $course = Course::with('addons')->where('id', $id)->first();
        return view('payments.addon', compact('course'));
    }

    public function courtinfo(Request $request)
    {
        $id = $request->id;

        if ($request->ajax()) {
            if ($request->county_id) {
                $court = Court::select(['id', 'court_name', 'court_number'])->where('county_id', $request->county_id)->get();
                return response()->json([
                    'success' => true,
                    'data' => $court
                ]);
            }

            if ($request->court_id) {
                $leaCode = LeaCode::select(['id', 'name', 'lea_code'])->where('court_id', $request->court_id)->get();
                if ($leaCode->count() > 0) {
                    return response()->json([
                        'success' => true,
                        'data' => $leaCode
                    ]);
                }
                return response()->json([
                    'success' => false
                ]);
            }
        }

        $data = Course::where('id', $id)
            ->first()
            ->state()
            ->with('county', 'county.courts', 'county.courts.leacode')
            ->first();

        return view('payments.courtinfo', compact('data'));
    }

    public function processPayment(Request $request, string $product, $price)
    {
        //    dd( $request->all());
        $user = auth()->user();
        $paymentMethod = $request->input('payment_method');
        $user->createOrGetStripeCustomer();
        $user->addPaymentMethod($paymentMethod);
        try {
            $data = $user->charge($price * 100, $paymentMethod, [
                'return_url' => route('payment.completed', ['id' => $product]), // Replace with the route to your payment completion page
            ]);

            $order = Order::create([
                'user_id' => $user->id,
                'course_id' => $product,
                'price' => $price,
                'status' => 'unpaid',
                'stripe_id' => $data->id
            ]);


            foreach ($request->addons as $addon) {
                $order->addons()->attach($addon);
            }
        } catch (\Exception $e) {

            return back()->withErrors(['message' => 'Error creating subscription. ' . $e->getMessage()]);
        }
        return redirect('profile');
    }

    public function paymentCompleted()
    {


        $user = auth()->user();

        $stripeId = Cashier::findBillable($user->stripe_id);
        echo '<pre>';
        print_r($stripeId->invoice());
        echo '</pre>';


        dd('--stop--');
    }

    public function webhook()
    {
        // This is your Stripe CLI webhook secret for testing your endpoint locally.
        $endpoint_secret = env('STRIPE_WEBHOOK_SECRET');

        $payload = @file_get_contents('php://input');
        $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
        $event = null;

        try {
            $event = \Stripe\Webhook::constructEvent(
                $payload,
                $sig_header,
                $endpoint_secret
            );
        } catch (\UnexpectedValueException $e) {
            // Invalid payload
            return response($e, 400);
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            // Invalid signature
            return response($e, 400);
        }

        // Handle the event
        switch ($event->type) {
            case 'payment_intent.succeeded':
                $paymentIntent = $event->data->object;
                $order = Order::where('stripe_id', $paymentIntent->id)->first();
                $order->status = 'paid';
                $order->save();

                Log::info("Order Paid: {$order->id}");

                // echo "Payment for {$paymentIntent->amount} was successful.";
                // ... handle other event types
            default:
                echo 'Received unknown event type ' . $event->type;
        }
        return response('');
    }
}
