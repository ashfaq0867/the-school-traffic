<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Court;
use App\Models\State;
use App\Models\Course;
use App\Models\LeaCode;
use App\Models\CoursePart;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $course = Course::with(['parts' => function ($query) {
            return $query->with(['part_read' => function ($query) {
                return $query->where('user_id', auth()->user()->id)
                        ->select('read_part as status');
            }]);
        },
        'order' => function ($query) {
            return $query->where('user_id', auth()->user()->id);
        }])
        ->first();

        return view('home', compact('course'));
    }

    public function profile(Request $request)
    {

        $id = 5;

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

        $user = User::where('id', auth()->user()->id)->with('details')->first();

        $states = State::all();

        return view('profile', compact('data', 'user', 'states'));
    }

    public function save(Request $request)
    {

        $validatedData =  [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'suit' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'user_state_id' => 'required|numeric',
            'zip_code' => 'required|string|max:10',
            'phone' => 'required|string|max:15',
            'alternate_phone' => 'nullable|string|max:15',
            'email_address' => 'required|email|max:255',
            'confirm_email' => 'required|email|max:255|same:email_address',
            'driver_license' => 'required|string|max:255',
            'state_id' => 'required|numeric',
            'dob' => 'required|date',
            'gender' => 'required',
            'ticket_county' => 'required|string|max:255',
            'ticket_citation' => 'required|string|max:255',
            'ticket_number' => 'required|string|max:255',
            'ticket_duedate' => 'required|date',
        ];

        if ($request->ticket_lea_code) {
            $validatedData['ticket_lea_code'] =  'required|string|max:255';
        }



        $validated = $request->validate($validatedData);


        unset($validated['confirm_email']);

        $user_details = UserDetail::where('user_id', auth()->user()->id)->update($validated);

        if ($user_details) {
            return redirect()->back()->with('success', 'User details updated successfully.');
        }

        return redirect()->back()->with('fail', 'User details updated Failed.');
    }



    public function verify(Request $request)
    {
        $previousUrl = Session::get('previousUrl');

        if (str_contains($previousUrl, 'final-quiz')) {
            $partExists = Course::where('id', $request->id)->exists();
        } else {
            $partExists = CoursePart::where('id', $request->id)->exists();
        }

        if (!$partExists) {
            return abort(404);
        }

        if ($request->ajax()) {
            $day = Carbon::parse($request->user()->details->dob)->format('d');
            if ($day == $request->day) {

                $request->session()->put('section_birth', 'verified');
                return response()->json([
                    'success' => true,
                    'message' => $request->session()->get('previousUrl')
                ]);
            }
            return response()->json([
                'success' => false,
                'message' => 'Please select your correct answer to this question.'
            ]);
        }

        return view('verify');
    }
}
