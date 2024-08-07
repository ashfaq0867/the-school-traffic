@extends('layouts.page')

@section('content')

    <main class=" w-full min-h-screen flex item-center justify-center flex-col">
        <div class="form_container   px-8 md:w-2/3 h-full mx-auto">
            <div
                class="bg-slate-100 flex items-center justify-center flex-col my-8  rounded-2xl min-h-screen py-4 lg:pb-24">
                <h2 class="bg-blue-600 text-white text-2xl font-bold w-full px-4 md:px-16 py-4 text-center">Register
                    for CA DMV Approved Course</h2>
                <div class="text-group flex flex-wrap py-8 px-4 md:px-16">
                    <div class="text_left md:w-1/2">
                        <h3 class="text-blue-600 text-2xl font-bold pb-2">Get Started with Online Traffic Violator
                            School</h3>
                        <p>TrafficSchoolCourse.com is a DMV Licensed Traffic School and your certificate will be filed with
                            your court for processing with the DMV upon course completion.

                            <br> <br> <strong class="text-blue-600 font-bold text-xl"> Note About Your Court
                                Information:</strong> Our California DMV Licensed course is accepted
                            by EVERY county traffic court in the state of California. <a href="#"
                                                                                         class="text-[#3056D3] font-bold">Click
                                here if you would like to verify that your courthouse is on
                                our approved list</a>.
                        </p>
                        <p class="text-lg font-bold text-blue-600 py-4">To sign up, please fill in all fields accurately
                            and click continue:</p>
                    </div>
                    <div class="logos md:w-1/2 md:px-24">
                        <a href="#" class="text-blue-600 text-xl font-bold">
                            California DMV Licensed Traffic School for Only
                            <span class="text-blue-600 text-4xl py-4 font-bold block">$19.95</span>
                        </a>
                        <div class="flex space-x-8 item-center justify-center ">
                            <a class="flex item-center justify-center" href="#">
                                <img class="w-24 object-contain" src="{!! asset('/images/img-logo-srcc.png') !!}"
                                     alt="rating"></a>
                            <a href="#"> <img class="w-24 object-contain"
                                              src="{!! asset('/images/img-logo-srccc.png') !!}"
                                              alt="rating"></a>
                            <a href="#"><img class="w-24 object-contain"
                                             src="{!! asset('/images/img-logo-srcvvv.png') !!}"
                                             alt="rating"></a>
                        </div>
                    </div>
                </div>
                <form class="w-full max-w-2xl shadow-2xl bg-white rounded-lg shadow-md p-8" method="post">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="first_name">
                            First Name<span class="text-red-600">*</span>
                        </label>
                        <input id="first_name" type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="first_name" value="{{ old('first_name') }}" required autocomplete="off" autofocus placeholder="Enter Your First name">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="last_name">
                            Last Name<span class="text-red-600">*</span>
                        </label>
                        <input id="last_name" type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="last_name" value="{{ old('last_name') }}" required placeholder="Enter your last name">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="emailAddress">
                            Email Address<span class="text-red-600">*</span>
                        </label>
                        <input id="emailAddress" type="email" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email_address" value="{{ old('email_address') }}" required placeholder="Enter your email address">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="confirmEmailAddress">
                            Confirm Email Address<span class="text-red-600">*</span>
                        </label>
                        <input id="confirmEmailAddress" type="email" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="confirm_email" value="{{ old('confirm_email') }}" required placeholder="Please retype your email address exactly">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="licenseState">
                            License State<span class="text-red-600">*</span>
                        </label>
                        <select name="state" class="block appearance-none w-full border rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="licenseState" required>
                            @foreach($states as $state)
                                <option value="{!! $state->id !!}">{!! $state->name !!}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="driverLicenseNumber">
                            Driver License #<span class="text-red-600">*</span>
                        </label>
                        <input id="driverLicenseNumber" type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="driver_license" value="{{ old('driver_license') }}" required placeholder="Enter your driver license number">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="birthDate">
                            Birth Date <span class="text-red-600">*</span>
                        </label>
                        <input id="birthDate" type="date" name="birthDate" value="{{ old('birthDate') }}" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required placeholder="Select date">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="promoCode">
                            Promo Code (optional)
                        </label>
                        <input id="promoCode" type="text" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="promo_code" value="{{ old('promo_code') }}" placeholder="You can also enter a promo code later, when making payment.">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">
                            <input class="mr-2 leading-tight" type="checkbox" name="agreement" value="1" required>
                            I have read and understand the TrafficSchoolCourse.com user agreement and certificate of completion policy.
                        </label>
                        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                            View TrafficSchoolCourse.com user agreement.
                        </a>
                        <br/>
                        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                            View certificate of completion policy.
                        </a>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">
                            <input class="mr-2 leading-tight" type="checkbox" name="special_offer" value="1">
                            I am interested in getting useful information and special offers for other TrafficSchoolCourse.com products.
                        </label>
                    </div>
                    <div class="flex items-center justify-center">
                        <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="submit">
                            Continue
                        </button>
                    </div>
                    <div class="text-group py-4">
                        <p><span class="text-red-600">*</span> Indicates Required Field</p>
                        <h4><strong class="text-blue-600 font-bold text-2xl">Note About Your Ticket Information:</strong> You can sign up for our course now, even if you don't have your traffic ticket in-hand. Providing your ticket information will be optional at this time, but keep in mind that you will need to provide your ticket info before taking the course final exam.</h4>
                    </div>
                </form>
            </div>

        </div>
    </main>
    {{--<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            // Custom method to check if the date is greater than 16 years old
            $.validator.addMethod("ageCheck", function(value, element) {
                const birthDate = new Date(value);
                const today = new Date();
                const age = today.getFullYear() - birthDate.getFullYear();
                const monthDiff = today.getMonth() - birthDate.getMonth();
                const dayDiff = today.getDate() - birthDate.getDate();

                // Adjust age if the birth date hasn't occurred yet this year
                if (monthDiff < 0 || (monthDiff === 0 && dayDiff < 0)) {
                    age--;
                }

                return this.optional(element) || age >= 16;
            }, "You must be at least 16 years old.");

            // Custom method to check if the Driver License has 1 capital letter and 7 digits
            $.validator.addMethod("driverLicenseCheck", function(value, element) {
                const regex = /^[A-Z]\d{7}$/;
                return this.optional(element) || regex.test(value);
            }, "Driver License should start with a capital letter and have 7 digits.");

            $("form").validate({
                rules: {
                    first_name: "required",
                    last_name: "required",
                    email_address: {
                        required: true,
                        email: true
                    },
                    confirm_email: {
                        required: true,
                        email: true,
                        equalTo: "#emailAddress"
                    },
                    state: "required",
                    driver_license: {
                        required: true,
                        driverLicenseCheck: true
                    },
                    birthDate: {
                        required: true,
                        date: true,
                        ageCheck: true
                    },
                    agreement: "required"
                },
                messages: {
                    first_name: {
                        required: "This field is required."
                    },
                    last_name: {
                        required: "This field is required."
                    },
                    email_address: {
                        required: "This field is required.",
                        email: "Please enter a valid format."
                    },
                    confirm_email: {
                        required: "This field is required.",
                        email: "Please enter a valid format.",
                        equalTo: "Email addresses do not match"
                    },
                    state: {
                        required: "This field is required."
                    },
                    driver_license: {
                        required: "This field is required.",
                        driverLicenseCheck: "Driver License should start with a capital letter and have 7 digits."
                    },
                    birthDate: {
                        required: "This field is required.",
                        date: "Please enter a valid format.",
                        ageCheck: "You must be at least 16 years old."
                    },
                    agreement: {
                        required: "This field is required."
                    }
                },
                errorPlacement: function(error, element) {
                    error.addClass("text-red-600 text-sm");
                    error.insertAfter(element);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass("border-red-600");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass("border-red-600");
                }
            });
        });
    </script>
@endsection
