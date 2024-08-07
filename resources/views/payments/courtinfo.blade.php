@extends('layouts.page')


@section('content')

    <main>

        <section class="px-8 py-16 flex item-center justify-between flex-wrap lg:flex-nowrap gap-6 lg:px-48 ">
            <div class="form bg-white shadow-md p-2 lg:p-4 lg:w-3/4 rounded-md ">
                <h2 class="text-xl lg:text-3xl font-bold space-x-2 flex item-center pb-4">
                <span class="bg-slate-200 p-2 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                     class="w-6 h-6 text-blue-600">
                    <path fill-rule="evenodd"
                          d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z"
                          clip-rule="evenodd"/>
                  </svg>
                  </span>
                    <span> Secure Purchase</span>
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
                            class="inline-block p-2 w-8 h-8 rounded-full bg-slate-200 text-sm flex item-center justify-center mx-auto">
                            2
                        </div>
                        <p>Payment Options</p>
                    </div>

                    <div class="line bg-slate-200 rounded-full w-full lg:w-36 h-1 mt-3"></div>
                    <div class="01 flex item-center justify-center flex-col gap-2">
                        <div
                            class="inline-block p-2 w-8 h-8 rounded-full bg-blue-600 text-white text-sm flex item-center justify-center mx-auto">
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
                <!-- court info start -->


                <section>

                    <div class="flex item-center justify-between flex-col lg:flex-row">


                        <div id="countyWrap" class="lg:w-1/2  p-3 m-4 bg-slate-100 rounded-md">
                            <label for="county" class="my-1">Choose County Where Citation Occurred*:</label>
                            <select class="bg-white p-2 w-full border-none" id="county" name="county">
                                <option value="">Select County</option>
                                @forelse($data->county as $county)
                                    <option value="{{$county->id}}">{{$county->name}}</option>
                                @empty
                                @endforelse
                            </select>
                            <p class="text-xs my-2">

                                Please select the county where you received your traffic citation (the county where your
                                ticket was issued.)
                            </p>
                        </div>
                        <div id="courtWrap" class="lg:w-1/2  p-3 m-4 bg-slate-100 rounded-md">
                            <label for="court" class="my-1">Choose County Where Citation Occurred*:</label>
                            <select class="bg-white p-2 w-full border-none " id="court" name="court" disabled>
                                <option value="">Select County First</option>
                            </select>
                            <p class="text-xs my-2">

                                Please select the Court listed on your paperwork (the Court that issued your
                                courtesy/warning notice).
                            </p>
                        </div>
                    </div>
                    <div class="flex item-center justify-between flex-col lg:flex-row">
                        <div id="ticket_number" class="lg:w-1/2  p-3 m-4 bg-slate-100 rounded-md">
                            <label for="ticket_number" class="my-1">Enter Case (Ticket/Citation) Number*:</label>
                            <input type="text" class="w-full p-2" name="ticket_number">
                            <p class="text-xs my-2">
                                Please enter your citation or case number. Please enter all letters and numbers of your
                                case number (or ticket/citation number)
                            </p>
                        </div>
                        <div id="due_date" class="lg:w-1/2  p-3 m-4 bg-slate-100 rounded-md">
                            <label for="due_date" class="my-1">Enter Traffic School Due Date*:</label>
                            <input class="w-full p-2" type="date" name="due_date">
                            <p class="text-xs my-2">
                                The due date is assigned by your Court. You must pass your traffic school course by this
                                Court assigned due date.
                            </p>
                        </div>
                    </div>
                    <div class="flex item-center justify-between flex-col lg:flex-row">
                        <div id="lea_code" class="w-full  p-3 m-4 bg-slate-100 rounded-md hidden">
                            <label for="lea_code" class="my-1">LEA Code*:</label>
                            <select class="w-full p-2" id="lea" name="lea">

                            </select>
                            <p class="text-xs my-2">
                                This four-digit code identifies the Law Enforcement Agency (LEA) that issued your
                                ticket. <br>
                                Often times, LEA Codes can be found directly after the case number on the courtesy
                                letter sent to you by the court. Los Angeles County LEA codes will usually start with a
                                '7' or a '19'.
                            </p>
                            <p class="text-xs my-2">
                                If you can't find your LEA code in our drop-down list, please make sure that you first
                                selected the correct court location, as listed on your paperwork.
                            </p>
                            <p class="text-xs my-2">
                                Still need help? Check out a complete list of LEA codes here.
                            </p>
                        </div>
                        <div class="div" class="lg:w-1/2  p-3 m-4 bg-slate-100 rounded-md"></div>
                    </div>
                    <p class="text-xs my-2 px-8">

                        Can't find your traffic school information? Contact your court or lookup your case here: Court
                        and Case Lookup.
                    </p>
                    <div class="btns flex item-center justify-end px-8 py-4 gap-2">
                        <button class="px-4 py-2 text-lg  text-white bg-blue-600 rounded-md">Update My Info</button>
                        {{--<button class="px-4 py-2 text-lg border border-blue-600 text-blue-600 rounded-md">Cancel
                            Update
                        </button>--}}
                    </div>
                </section>


            </div>
            <div class="list bg-white shadow-lg rounded-md w-full lg:w-1/2">
                <div class="order-summery p-4 flex item-center justify-between bg-slate-200 rounded">
                    <h2 class="text-md font-bold">Order summary</h2>
                    <h2 class="text-md text-blue-600 font-bold">Total <span>$19.95</span></h2>
                </div>
                <div class="order-summery p-4 flex item-center justify-between my-2 rounded">
                    <h2 class="text-md font-bold">DMV Approved Traffic School</h2>
                    <h2 class="text-md text-blue-600 font-bold"><span>$19.95</span></h2>
                </div>
                <div class="order-summery p-4 flex item-center justify-between border-b-2 my-2 rounded">
                    <p>TrafficSchool.com Course</p>
                </div>
                <div class="order-summery p-4 flex item-center justify-between my-2 rounded">
                    <h2 class="text-md font-bold">Certificate Delivery</h2>
                    <h2 class="text-md text-blue-600 font-bold"><span>FREE</span></h2>
                </div>
                <div class="order-summery p-4 flex item-center justify-between border-b-2 my-2 rounded">
                    <p>Electronic Delivery to Court</p>
                </div>
                <div class="order-summery p-4 flex item-center justify-between my-2 rounded">
                    <h2 class="text-md font-bold">Certificate Processing</h2>
                    <h2 class="text-md text-blue-600 font-bold"><span>FREE</span></h2>
                </div>
                <div class="order-summery p-4 flex item-center justify-between border-b-2 my-2 rounded">
                    <p>Standard</p>
                </div>
                <div class="order-summery p-4 flex item-center justify-between border-b-2 my-2 rounded">
                    <p>Tax</p>
                    <p>---</p>
                </div>
                <div class="order-summery p-4 flex item-center justify-between my-2 rounded">
                    <h2 class="text-md font-bold">Order Total</h2>
                    <h2 class="text-md text-blue-600 font-bold"><span>$19.95</span></h2>
                </div>
            </div>
        </section>
        <div class="last px-8 lg:px-48">
            <p class="px-8 flex item-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0 6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z"/>
                </svg>
                <span class="pb-2">
                 Pay By Phone ::: Call M-F, 9am-6pm PST @ 800-691-5014</p>
            </span>
        </div>
    </main>

@endsection

@section('scripts')
    <script>
        $('document').ready(function (e) {

            $('body').on('change', '#county', function (e) {
                e.preventDefault();
                $('#court').html('');
                $.get('{{ route("payment.courtinfo", request()->id)  }}', {'county_id': $(this).val()}, function (data) {
                    if (data.success) {
                        $('#court').removeAttr('disabled');
                        $('#court').append('<option value="">Select Court</option>');
                        $.each(data.data, function (ind, court) {
                            $('#court').append('<option value="' + court.id + '">' + court.court_name + ' -- ' + court.court_number + '</option>');
                        });
                    }
                });
            });

            $('#court').on('change', function (e) {
                e.preventDefault();
                $('#lea').html('');
                $.get('{{ route("payment.courtinfo", request()->id)  }}', {'court_id': $(this).val()}, function (data) {
                    if (data.success) {
                        $('#lea_code').show();
                        $('#lea').append('<option value="">Select Lea Code</option>');
                        $.each(data.data, function (ind, lea) {
                            $('#lea').append('<option value="' + lea.id + '">' + lea.name + ' -- ' + lea.lea_code + '</option>');
                        });
                    }

                    if (!data.success) {
                        $('#lea_code').hide();
                    }
                });

            })

        })
    </script>
@endsection
