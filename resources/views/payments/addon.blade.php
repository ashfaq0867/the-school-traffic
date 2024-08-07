@extends('layouts.page')


@section('content')

    <main
        class="px-4 sm:px-16  xl:px-48 py-16 bg-slate-100 min-h-screen flex flex-col items-center justify-start space-y-4">
        <h2 class="text-2xl font-bold lg:text-4xl text-blue-600">Course Purchase Options</h2>
        <section
            class="bg-white shadow-xl w-full rounded-xl mt-8 p-8 px-8 lg:px-36 py-16 flex item-center justify-center flex-col">
            <div class="top_text">
                <h2 class="text-xl font-bold my-2">Your Traffic School Course fee is only ${!! $course->price !!}!</h2>
                <p class="my-2">Your course fee of ${!! $course->price !!} includes everything you need to fulfill your
                    traffic school
                    requirement.</p>
                <p class="my-2">Please select any optional course upgrades you want from below and click 'continue' to
                    make payment.</p>
                <p class="my-2">You will gain access to our entire course, including the final exam, after you have
                    completed payment.</p>
            </div>
            <form action="{!! route('payment.addon', $course->id) !!}" method="POST">
                @csrf
                <!-- certification process and delivery start -->
                <div class="section w-full my-4">
                    <div class="w-full px-6 rounded py-2 flex item-center justify-between bg-blue-600 text-white">
                        <h2 class="text-2xl mt-2 flex item-center justify-center font-bold">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6 mt-2 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M9 3.75H6.912a2.25 2.25 0 0 0-2.15 1.588L2.35 13.177a2.25 2.25 0 0 0-.1.661V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 0 0-2.15-1.588H15M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859M12 3v8.25m0 0-3-3m3 3 3-3"/>
                            </svg>
                        </span>
                            Certification Process & Delivery
                        </h2>
                        <span
                            class="text-xl border border-slate-400 px-4 py-2 rounded-full mb-1 flex item-center justify-center text-center">1</span>
                    </div>
                    <div class="text_form py-4 px-4">
                        <p class="text-sm">Your certificate of completion will be processed within 3 business days and
                            electronically submitted to the court for processing with the DMV.</p>

                        <h2 class="text-blue-600 text-lg font-semibold my-3">Select Processing Method</h2>

                        @forelse($course->addons as $addon)
                            @if($addon->addon_type == 'certificate')
                                <div class="input_group my-2">
                                    <input type="radio" name="certificate[]" value="{!! $addon->id !!}"
                                           id="certificate_{!! $addon->id !!}" checked>
                                    <label for="certificate_{!! $addon->id !!}">
                                        {{ $addon->addon_price > 0 ? '$'.$addon->addon_price : ''  }}
                                        <strong class="text-red-600">{{ $addon->addon_label }}</strong>
                                        {{$addon->addon_name}}. <br>
                                        {{$addon->addon_detail}}
                                    </label>
                                </div>
                            @endif
                        @empty
                        @endforelse

                        <p class="text-red-600 text-sm font-semibold">PLEASE NOTE: trafficschoolcourse.com does not
                            process certificates on Saturdays or Sundays. <br> Certificates for courses completed on the
                            weekend will be processed the morning of the next business day.</p>
                    </div>
                </div>
                <!-- certification process and delivery end-->

                <!-- verification -->
                <div class="section w-full my-4">
                    <div class="w-full px-6 rounded py-2 flex item-center justify-between bg-blue-600 text-white">
                        <h2 class="text-2xl mt-2 flex item-center justify-center font-bold">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6 mt-2 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z"/>
                              </svg>

                        </span>
                            Verification
                        </h2>
                        <span
                            class="text-xl border border-slate-400 px-4 py-2 rounded-full mb-1 flex item-center justify-center text-center">2</span>
                    </div>
                    <div class="text_form py-4 px-4">
                        <p class="text-sm">We will send you confirmation when you have passed our course. You may choose
                            any of the additional options below if you would like further confirmation of your course
                            completion for your records.</p>


                        @forelse($course->addons as $addon)
                            @if($addon->addon_type == 'verify')
                                <div class="input_group my-2">
                                    <input type="checkbox" value="{!! $addon->id !!}" name="verify[]"
                                           id="verify_{!! $addon->id !!}">
                                    <label for="verify_{!! $addon->id !!}">
                                        {{ $addon->addon_price > 0 ? '$'.$addon->addon_price : ''  }}
                                        <strong class="text-red-600">{{ $addon->addon_label }}</strong>
                                        {{$addon->addon_name}} <br>
                                        {{$addon->addon_detail}}
                                    </label>
                                </div>
                            @endif
                        @empty
                        @endforelse
                    </div>
                </div>

                <!-- select course upgrade -->
                {{--<div class="promotion_code border-t-2 pt-6 border-slate-200">
                    <p>Promotion Code (Optional) - If you have a promotion code, please enter it here:</p>
                    <input type="text" class="border border-slate-300 rounded-md my-2 py-2 px-4">
                </div>--}}
                <div class="btns mt-2 flex item-center justify-end">
                    <a type="button" href="{{ URL::previous() }}"
                       class="bg-blue-600 p-2 px-4 rounded-md text-white mr-1">Cancel</a>
                    <button type="submit" class="bg-blue-600 p-2 px-4 rounded-md text-white ml-1">Continue</button>
                </div>
            </form>
        </section>
    </main>

@endsection
