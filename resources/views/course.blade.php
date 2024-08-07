@extends('layouts.page') {{-- Assuming you have an app layout --}}

{{--@section('header')--}}

<!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{--                {{ __('Dashboard') }}--}}
</h2> -->

{{--@endsection--}}

@section('content')
{{--    @dump($state->toArray())--}}
    <main
        class="px-4 sm:px-16 xl:px-48 py-16 bg-slate-100 min-h-screen flex flex-col items-center justify-start space-y-4 overflow-hidden">
        <h2 class="text-xl pb-8 font-black md:text-4xl"><span
                class="text-blue-600 bg-white px-8 py-2 rounded-full shadow-2xl">{!! $state->name  !!}</span> DMV Licensed Traffic
            School</h2>
        @foreach($state->courses as $course)
        <div class="content flex items-center justify-center md:space-x-8 flex-wrap lg:flex-nowrap">
            <div class="img mg:basis-1/2 xl:p-4 md:p-16 relative">
                <h2 class="text-sm font-black md:text-2xl">Only <span class="text-blue-600 bg-white px-8 py-2 rounded-full shadow-2xl">$ {!! $course->price !!}</span></h2>
                <img src='{{asset('/images/traffic-police2.svg')}}' alt="traffic police paper checking"
                    title="traffic police paper checking" class="lg:w-2/3">

                <a
                    href="{!! route('register', ['id' => $state->id]) !!}"
                    class="absolute md:bottom-36 font-semibold md:right-8 bg-white px-8 py-4 border-blue-400 border rounded-full shadow-2xl hover:bg-blue-600 hover:text-white transition-all delay-150 duration-150 ease-in-out flex items-center justify-between gap-4">
                    Start {!! ucfirst($state->code) !!} Course
                    <svg width="36" height="16" viewBox="0 0 37 16" class="hover:text-white" fill="orange"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M36.7071 8.7071C37.0976 8.31658 37.0976 7.68341 36.7071 7.29289L30.3431 0.92893C29.9526 0.538405 29.3195 0.538405 28.9289 0.92893C28.5384 1.31945 28.5384 1.95262 28.9289 2.34314L34.5858 8L28.9289 13.6569C28.5384 14.0474 28.5384 14.6805 28.9289 15.0711C29.3195 15.4616 29.9526 15.4616 30.3431 15.0711L36.7071 8.7071ZM8.74228e-08 9L36 9L36 7L-8.74228e-08 7L8.74228e-08 9Z"
                            fill="black" />
                    </svg>

                </a>

            </div>
            <div class="md:basis-.6/2 xl:px-24 py-16 rounded-xl">
                <h2 class="text-2xl text-center md:text-left sm:text-3xl md:text-3xl lg:text-4xl font-extrabold py-2">
                    Online {{$course->course_short_name}}</h2>
                <h3 class="text-xl sm:text-2xl font-extrabold py-4">DMV License #E1393 for Traffic Tickets</h3>
                <ul class=" text-sm md:text-xl md:list-disc">
                    <li>100% Online Ticket Course.</li>
                    <li>Self-paced with No Timers.</li>
                    <li>Login & Logout as You Please.</li>
                    <li>DMV Certificates - Fast Reporting.</li>
                </ul>
                <a href="#description"
                    class="text-md font-semibold text-blue-600 inline-block mt-8 px-12 rounded-full shadow-2xl bg-white p-2">Tell
                    me more about CA Traffic School.</a>
            </div>
        </div>
        @endforeach
        <div class="text-group text-[14px] bg-white text-red-500 p-4 xl:p-8 rounded-md">
            <!-- <h2 class="text-2xl md:text-4xl font-extrabold text-center">Alabama Defensive Driving Course Online | AL Traffic Ticket Prevention</h2> -->
            <p class="xl:w-2/4 mx-auto py-2">** YES! We are a California Department of Motor Vehicles (CA DMV) Licensed
                Traffic Violator School and our online course is accepted by every court in California for traffic
                school completion. To view our DMV license, <a class="text-blue-600"> click here.</a> **.</p>
            <p class="xl:w-2/4 mx-auto py-2">Note For CDL Holders Only: <br>
                If you hold a Commercial Driver License, you may be eligible to take traffic school if you were ticketed
                in a non-commercial vehicle. However, once your traffic school certificate of completion has been fully
                processed by the court with the DMV, you will need to contact the DMV Driver Safety Unit at (916)
                657-6452 in order to have the point masked from your driving record. Also, the driver/student must call
                the DSU for clearance. Someone else cannot call on your behalf.
                .</p>
        </div>
        <h2 class="text-4xl font-semibold mt-16 pt-12">Review's </h2>
        <div class="stars flex items-center justify-center space-x-4">
            <svg class="w-8 h-8" viewBox="0 0 62 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M31 0L38.1844 22.1115H61.4338L42.6247 35.7771L49.8091 57.8885L31 44.2229L12.1909 57.8885L19.3753 35.7771L0.566191 22.1115H23.8156L31 0Z"
                    fill="#FECE2F" />
            </svg>
            <svg class="w-8 h-8" viewBox="0 0 62 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M31 0L38.1844 22.1115H61.4338L42.6247 35.7771L49.8091 57.8885L31 44.2229L12.1909 57.8885L19.3753 35.7771L0.566191 22.1115H23.8156L31 0Z"
                    fill="#FECE2F" />
            </svg>
            <svg class="w-8 h-8" viewBox="0 0 62 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M31 0L38.1844 22.1115H61.4338L42.6247 35.7771L49.8091 57.8885L31 44.2229L12.1909 57.8885L19.3753 35.7771L0.566191 22.1115H23.8156L31 0Z"
                    fill="#FECE2F" />
            </svg>
            <svg class="w-8 h-8" viewBox="0 0 62 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M31 0L38.1844 22.1115H61.4338L42.6247 35.7771L49.8091 57.8885L31 44.2229L12.1909 57.8885L19.3753 35.7771L0.566191 22.1115H23.8156L31 0Z"
                    fill="#FECE2F" />
            </svg>
            <svg class="w-8 h-8" viewBox="0 0 62 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M31 0L38.1844 22.1115H61.4338L42.6247 35.7771L49.8091 57.8885L31 44.2229L12.1909 57.8885L19.3753 35.7771L0.566191 22.1115H23.8156L31 0Z"
                    fill="#FECE2F" />
            </svg>

        </div>
        <div
            class="review flex items-center justify-center space-x-8 md:gap-16 space-y-16 flex-wrap flex-col-reverse md:flex-row md:flex-nowrap">
            <div class="review_text basis-2/4 lg:border-r-4 border-orange-300 pr-6 text-center md:text-left">
                <p>
                    <strong class="text-2xl block">
                        ~ the easiest ~
                    </strong> <br>
                    I have taken two other on-line traffic school programs and this was hands down the easiest one I
                    have done. Thanks to this website, I will not only recommend friends, I will preach about it... <a
                        href="#" class="text-blue-600 font-semibold">(read more rave reviews)</a>
                </p> <br>
                <div class="stars flex items-center justify-center md:justify-start space-x-2 md:space-x-4 py-4">
                    <svg class="w-4 h-4" viewBox="0 0 62 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M31 0L38.1844 22.1115H61.4338L42.6247 35.7771L49.8091 57.8885L31 44.2229L12.1909 57.8885L19.3753 35.7771L0.566191 22.1115H23.8156L31 0Z"
                            fill="#FECE2F" />
                    </svg>
                    <svg class="w-4 h-4" viewBox="0 0 62 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M31 0L38.1844 22.1115H61.4338L42.6247 35.7771L49.8091 57.8885L31 44.2229L12.1909 57.8885L19.3753 35.7771L0.566191 22.1115H23.8156L31 0Z"
                            fill="#FECE2F" />
                    </svg>
                    <svg class="w-4 h-4" viewBox="0 0 62 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M31 0L38.1844 22.1115H61.4338L42.6247 35.7771L49.8091 57.8885L31 44.2229L12.1909 57.8885L19.3753 35.7771L0.566191 22.1115H23.8156L31 0Z"
                            fill="#FECE2F" />
                    </svg>
                    <svg class="w-4 h-4" viewBox="0 0 62 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M31 0L38.1844 22.1115H61.4338L42.6247 35.7771L49.8091 57.8885L31 44.2229L12.1909 57.8885L19.3753 35.7771L0.566191 22.1115H23.8156L31 0Z"
                            fill="#FECE2F" />
                    </svg>
                    <svg class="w-4 h-4" viewBox="0 0 62 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M31 0L38.1844 22.1115H61.4338L42.6247 35.7771L49.8091 57.8885L31 44.2229L12.1909 57.8885L19.3753 35.7771L0.566191 22.1115H23.8156L31 0Z"
                            fill="#FECE2F" />
                    </svg>
                </div>
                <h2 class="text-2xl block font-semibold">
                    - Esteban in Westminster
                </h2>
            </div>
            <img src='{{asset('/images/clientReviewPic.png')}}' alt="Client Review" title="Client Review" class="md:w-[240px]">
        </div>
        <div class="more_info_card px-2 text-center md:text-left xl:px-24 py-8 w-full">
            <h2 class="text-xl text-center pb-12"><span class="text-4xl px-4 font-extrabold text-blue-600" id="description">More
                    Info</span> California Traffic School | Program Detail.</h2>

            @foreach($state->courses as $course)


            <div class="card_box_info bg-white rounded-md w-full p-8  ">
                <h2 class="text-2xl text-blue-600 text-center font-black mb-5">California DMV Licensed Traffic School
                    (Traffic Violator School).</h2>

                <div class="text_price_btn flex items-start justify-between gap-8 flex-wrap md:flex-nowrap">
                    <div class="md:basis-3/4 no-tailwind-base">
                        {!! $course->course_description !!}
                        {{--<h3 class="text-xl text-center md:text-left font-semibold py-4">Why Traffic School: A Moving
                            Violation Point Hidden on your Driving Record.</h3>
                        <p>
                            Got a traffic ticket in California? Take our California Department of Motor Vehicles
                            licensed online traffic school course to handle your ticket and hide the points off your DMV
                            driving record.
                        </p>--}}
                    </div>
                    <div class="price_btn w-full md:basis-1/4 text-center">
                        <h3 class="text-2xl font-extrabold text-blue-600">only ${!! $course->price !!}</h3>
                        <p>Everything You Need.</p>
                        <a href="{{ route('state.index') }}"
                            class="px-6 py-3 inline-block font-semibold bg-blue-600 text-white text-xl md:text-2xl mt-4 rounded-full shadow-2xl hover:bg-white hover:text-blue-700 hover:border-blue-600 hover:border">Start
                            Course</a>
                    </div>
                </div>
                {{--<div class="md:w-3/4 my-6">
                    <h3 class="text-xl font-semibold py-4">Benefits of Online Traffic School for California Drivers.
                    </h3>
                    <ul class="list-disc px-6">
                        <li>You can take the entire course, including quizzes and final exam, 100% online. Stay home, go
                            to a coffee shop - it's up to you.</li>
                        <li>Our course has no timers and you can go at your own pace. Login and logout as you choose. We
                            save your work along the way.</li>
                        <li>Our highly educational course was designed to be easy to take, easy to understand, easy to
                            navigate, and easy to pass.</li>
                        <li>You get the best customer service from our friendly and patient customer support staff, and
                            we are located right here in California.</li>
                        <li>Electronic reporting of DMV certificates of completion sent to your court within 3 days of
                            completion - RUSH (one day) processing is available.</li>
                    </ul>
                </div>
                <div class="md:w-3/4 my-6">
                    <h3 class="text-xl font-semibold py-4">How Do I Go to Traffic School in California?.</h3>
                    <ul class="list-decimal px-6">
                        <li>Request Traffic School from the Court - Check your traffic citation for details about how to
                            request traffic school from the county court that issued you a ticket. Make sure you get
                            approval to take traffic school BEFORE enrolling in traffic school.</li>
                        <li>Enroll in our 100% online traffic school in just minutes, either online or over the phone.
                        </li>
                        <li>Read well laid out chapters, take simple section quizzes, and pass the open-book final exam.
                            Once you pass, your official DMV certificate will be sent on your behalf within 3 business
                            days as required by the DMV. RUSH (one day) processing is available.</li>
                        <li>The county court and DMV will process your traffic school certificate and the ticket points
                            will not adversely affect your driving record.</li>
                    </ul>
                </div>

                <div class=" my-6  text-[14px]">
                    <h3 class="text-xl font-semibold py-4">Please Note</h3>
                    <p class="text-red-500">
                        ** YES! We are a California Department of Motor Vehicles (CA DMV) Licensed Traffic Violator
                        School and our online course is accepted by every court in California for traffic school
                        completion. To view our DMV license, <a href="#" class="text-blue-600">click here.</a> ** <br>
                        <br>
                    </p>
                    <h4 class="font-semibold">Note For CDL Holders Only:</h4>
                    <p class="text-red-500">
                        If you hold a Commercial Driver License, you may be eligible to take traffic school if you were
                        ticketed in a non-commercial vehicle. However, once your traffic school certificate of
                        completion has been fully processed by the court with the DMV, you will need to contact the DMV
                        Driver Safety Unit at (916) 657-6452 in order to have the point masked from your driving record.
                        Also, the driver/student must call the DSU for clearance. Someone else cannot call on your
                        behalf.</a> ** <br> <br>
                    </p>

                </div>--}}
            </div>

            @endforeach

            <!-- second card for sell -->
            {{--<div class="card_box_info bg-white rounded-md w-full p-8 mt-6">
                <h2 class="text-2xl text-blue-600 text-center font-black">Traffic School Workbook: CA DMV Licensed
                    Home-Study Course.</h2>
                <div class="text_price_btn flex items-center justify-between gap-8 flex-wrap md:flex-nowrap">
                    <div class="md:basis-2/4">
                        <h3 class="text-xl text-center md:text-left font-semibold py-4">Looking for an Offline option
                            for completing your traffic school?</h3>
                        <p>
                            Have our workbook mailed to you, complete everything at home or on-the-go, send back your
                            tests and your official DMV certificate will be sent on your behalf. This is the ideal DMV
                            licensed traffic school alternative for those who prefer to learn from a hardcopy workbook,
                            rather than learning online. <br> <br> Why Choose the Workbook? <br> <br> If you can't (or
                            don't want to) go online, the workbook course provides the same great education as the
                            online course, while still letting you enjoy the convenience of working at your own pace, in
                            your own home. <br> <br> You may also visit our office if you are in the Greater Los Angeles
                            area to pick-up a workbook, take your final exam and/or have your test graded right in front
                            of you by one of our friendly customer service representatives. We're open Monday - Friday
                            from 9am - 6pm and conveniently located at 9121 Oakdale Avenue, Suite 120 in Chatsworth CA.
                            No appointment is necessary.
                        </p>
                    </div>
                    <div class="price_btn w-full md:basis-2/4 text-right">
                        <h3 class="text-2xl font-extrabold text-blue-600">only $19.95</h3>
                        <p>Mailed Workbook Course.</p>
                        <button
                            class="px-6 py-3 font-semibold bg-blue-600 text-white text-xl md:text-2xl mt-4 rounded-full shadow-2xl hover:bg-white hover:text-blue-700 hover:border-blue-600 hover:border">Order
                            Workbook</button>
                    </div>
                </div>

                <div class=" my-6  text-[14px]">
                    <h3 class="text-xl font-semibold py-4">Please Note</h3>
                    <p class="text-red-500">
                        ** YES! We are a California Department of Motor Vehicles (CA DMV) Licensed Traffic Violator
                        School and our online course is accepted by every court in California for traffic school
                        completion. To view our DMV license, <a href="#" class="text-blue-600">click here.</a> ** <br>
                        <br>
                    </p>
                    <h4 class="font-semibold">Note For CDL Holders Only:</h4>
                    <p class="text-red-500">
                        If you hold a Commercial Driver License, you may be eligible to take traffic school if you were
                        ticketed in a non-commercial vehicle. However, once your traffic school certificate of
                        completion has been fully processed by the court with the DMV, you will need to contact the DMV
                        Driver Safety Unit at (916) 657-6452 in order to have the point masked from your driving record.
                        Also, the driver/student must call the DSU for clearance. Someone else cannot call on your
                        behalf.</a> ** <br> <br>
                    </p>

                </div>
            </div>--}}

        </div>
    </main>

@endsection


@section('scripts')
    <script>

    </script>
@endsection

