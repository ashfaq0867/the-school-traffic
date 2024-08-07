@extends('layouts.page')
@section('content')

{{--@php
$total = $course->price;
foreach ($course->addons as $add){
$total += $add->addon_price;
}
$total = number_format($total,2);
@endphp--}}

<main>
    <form class="" method="POST" id="subscribe-form" action="{{route('processPayment', [$product, $price])}}">
        @csrf
        <section class="px-8 py-16 flex item-center justify-between flex-wrap lg:flex-nowrap gap-6 lg:px-48 ">

            <div class="form bg-white shadow-md p-2 lg:p-4 lg:w-3/4 rounded-md ">
                <h2 class="text-xl lg:text-3xl font-bold space-x-2 flex item-center pb-4">
                    <span class="bg-slate-200 p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-6 h-6 text-blue-600">
                            <path fill-rule="evenodd"
                                d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                    <span>Secure Purchase</span>
                </h2>
                <div class="tabs flex item-center justify-between py-4 px-4 rounded-md my-4">
                    <div class="01 flex item-center justify-center flex-col gap-2">
                        <div
                            class="inline-block p-2 w-8 h-8 rounded-full bg-slate-200 text-sm flex item-center justify-center mx-auto">
                            1
                        </div>
                        <p>Sign Up</p>
                    </div>
                    <div class="line bg-slate-200 rounded-full w-full lg:w-36 h-1 mt-3"></div>
                    <div class="flex item-center justify-center flex-col gap-2">
                        <div
                            class="inline-block p-2 w-8 h-8 rounded-full bg-blue-600 text-white text-sm flex item-center justify-center mx-auto">
                            2
                        </div>
                        <p>Payment Options</p>
                    </div>

                    <div class="line bg-slate-200 rounded-full w-full lg:w-36 h-1 mt-3"></div>
                    <div class="01 flex item-center justify-center flex-col gap-2">
                        <div
                            class="inline-block p-2 w-8 h-8 rounded-full bg-slate-200 text-sm flex item-center justify-center mx-auto">
                            3
                        </div>
                        <p>Court Info</p>
                    </div>
                    <div class="line bg-slate-200 rounded-full w-full lg:w-36 h-1 mt-3"></div>

                    <div class="01 flex item-center justify-center flex-col gap-2">
                        <div
                            class="inline-block p-2 w-8 h-8 rounded-full bg-slate-200 text-sm flex item-center justify-center mx-auto">
                            4
                        </div>
                        <p>Start Course</p>
                    </div>
                </div>
                <div class="flex item-center justify-between pb-4 border-b-2 py-4">
                    <h3 class="lg:text-2xl font-semibold">Payment Method</h3>
                    <div class="icon">
                        <img class="w-48" src="{!! asset('./images/payment_img.png') !!}" alt="payment">
                    </div>
                </div>
                <div class="payment_form flex flex-wrap gap-2 p-4">

                    <div class="input_group flex flex-col gap-1 w-full lg:w-100 hover:bg-slate-100 p-2 rounded-md">
                        <label for="card-holder-name" class="text-xl">Full Name on card</label>
                        <input class="p-2 border rounded-md w-full focus:outline-blue-500 py-4" type="text"
                            autocomplete="off" name="name" placeholder="Name" id="card-holder-name"
                            value="{{$user->name}}">
                        <p class="error_msg text-sm text-red-600 hidden">
                            Please enter your Credit name and try again.
                        </p>
                    </div>
                    <div
                        class="form-row input_group flex flex-col gap-1 w-full lg:w-100 hover:bg-slate-100 p-2 rounded-md">
                        <label for="card-element">Credit or debit card</label>
                        <div id="card-element" class="form-control"></div><!-- Used to display form errors. -->
                        <div id="card-errors" role="alert"></div>
                    </div>

                    <div class="input_group flex flex-col gap-1 w-full lg:w-[400px] hover:bg-slate-100 p-2 rounded-md">
                        <label for="zip-code" class="text-xl">Zip Code</label>
                        <input class="p-2 border rounded-md w-full py-4 focus:outline-blue-500" type="text"
                            id="zip-code" autocomplete="off" name="zip-code" placeholder="ex:12345">
                        <p class="error_msg text-sm text-red-600 hidden">
                            Please enter your Zip Code try again.
                        </p>
                    </div>

                    <button class="bg-blue-600 p-3 text-xl text-white rounded-md px-4 hover:bg-blue-700 my-4"
                        id="card-button" type="button" data-secret="{{ $intent->client_secret }}">Process
                        Secure Payment
                    </button>
                </div>

                <div class="msg px-6 py-8">
                    <a class="block text-blue-500" href="{!! route('home') !!}"> Pay Later ::: I want to start the
                        course now and try it for
                        free (no card required).</a>
                </div>

            </div>
            <div class="list bg-white shadow-lg rounded-md w-full lg:w-1/2">
                <div class="order-summery p-4 flex item-center justify-between bg-slate-200 rounded">
                    <h2 class="text-md font-bold">Order summary</h2>
                    <h2 class="text-md text-blue-600 font-bold">Total <span>${!! $total !!}</span></h2>
                </div>
                <div class="order-summery p-4 flex item-center justify-between my-2 rounded">
                    <h2 class="text-md font-bold">DMV Approved Traffic School</h2>
                    <h2 class="text-md text-blue-600 font-bold"><span>${!! $course->price !!}</span></h2>
                </div>
                <div class="order-summery p-4 flex item-center justify-between border-b-2 my-2 rounded">
                    <p>TrafficSchoolCourse.com Course</p>
                </div>
                <div class="order-summery p-4 flex item-center justify-between my-2 rounded">
                    <h2 class="text-md font-bold">Certificate Delivery</h2>
                    <h2 class="text-md text-blue-600 font-bold"><span>FREE</span></h2>
                </div>
                <div class="order-summery p-4 flex item-center justify-between border-b-2 my-2 rounded">
                    <p>Electronic Delivery to Court</p>
                </div>
                @forelse($course->addons as $addon)
                @if($addon->addon_type == 'certificate')
                <input type="hidden" name="addons[]" value="{{ $addon->id }}">
                <div class="order-summery p-4 flex item-center justify-between my-2 rounded">
                    <h2 class="text-md font-bold">Certificate Processing</h2>
                    <h2 class="text-md text-blue-600 font-bold">
                        <span>{!! $addon->addon_price > 0 ? '$' .$addon->addon_price : 'FREE' !!}</span>
                    </h2>
                </div>
                <div class="order-summery p-4 flex item-center justify-between border-b-2 my-2 rounded">
                    <p>{{ $addon->addon_name }}</p>
                </div>
                @elseif($addon->addon_type == 'verify')
                <input type="hidden" name="addons[]" value="{{ $addon->id }}">
                <div class="order-summery p-4 flex item-center justify-between my-2 rounded border-b-2">
                    <h2 class="text-md font-bold">{{ $addon->addon_name }}</h2>
                    <h2 class="text-md text-blue-600 font-bold">
                        <span>{!! $addon->addon_price > 0 ? '$' .$addon->addon_price : 'FREE' !!}</span>
                    </h2>
                </div>
                @endif

                @empty
                @endforelse
                {{--<div class="order-summery p-4 flex item-center justify-between my-2 rounded">
                    <h2 class="text-md font-bold">Certificate Processing</h2>
                    <h2 class="text-md text-blue-600 font-bold"><span>FREE</span></h2>
                </div>
                <div class="order-summery p-4 flex item-center justify-between border-b-2 my-2 rounded">
                    <p>Standard</p>
                </div>--}}
                <div class="order-summery p-4 flex item-center justify-between border-b-2 my-2 rounded">
                    <p>Tax</p>
                    <p>---</p>
                </div>
                <div class="order-summery p-4 flex item-center justify-between my-2 rounded">
                    <h2 class="text-md font-bold">Order Total</h2>
                    <h2 class="text-md text-blue-600 font-bold"><span>${!! $total !!}</span></h2>
                </div>
            </div>
        </section>
    </form>


    <div class="last px-8 lg:px-48">
        <p class="px-8 flex item-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0 6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
            </svg>
            <span class="pb-2">
                Pay By Phone ::: Call M-F, 9am-6pm PST @ 123-456-7890
            </span>
        </p>
    </div>
</main>
@endsection

@section('scripts')

<script>
    var stripe = Stripe('{{ env('STRIPE_KEY') }}');
        var elements = stripe.elements();
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {color: '#aab7c4'}
            }, invalid: {color: '#fa755a', iconColor: '#fa755a'}
        };
        var card = elements.create('card', {hidePostalCode: true, style: style});
        card.mount('#card-element');
        console.log(document.getElementById('card-element'));
        card.addEventListener('change', function (event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
        const cardHolderName = document.getElementById('card-holder-name');
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;
        cardButton.addEventListener('click', async (e) => {
            console.log("attempting");
            const {setupIntent, error} = await stripe.confirmCardSetup(clientSecret, {
                payment_method: {
                    card: card,
                    billing_details: {name: cardHolderName.value}
                }
            });
            if (error) {
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = error.message;
            } else {
                paymentMethodHandler(setupIntent.payment_method);
            }
        });

        function paymentMethodHandler(payment_method) {
            var form = document.getElementById('subscribe-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'payment_method');
            hiddenInput.setAttribute('value', payment_method);
            form.appendChild(hiddenInput);
            form.submit();
        }
</script>
@endsection
