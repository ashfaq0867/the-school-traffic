@extends('layouts.page')


@section('content')

{{-- @dd($user->details->ticket_duedate) --}}

<main>
    {{-- <header class="header py-8 text-white bg-blue-600 px-8 lg:px-48">--}}
        {{-- Header--}}
        {{-- </header>--}}
    <div class="top px-24 flex item-center justify-center flex-col gap-4 py-4 w-2/4 mx-auto">

        <h2 class="text-2xl font-bold text-blue-600">Update Your Personal Information</h2>
        <p class="text-xl text-black">Required Information for Traffic Violator School</p>
        <p class="text-slate-600">Please enter accurate and complete information to ensure that your traffic school
            certificate is processed and your traffic ticket will be cleared without delay. You will be able to
            review
            your updated info on the next page.</p>
    </div>
    <section class="px-8 py-16 flex item-center justify-center flex-wrap lg:flex-nowrap  gap-6 lg:px-48 ">
        <div class="form shadow-md  lg:w-2/4 rounded-md bg-slate-100 pb-8">
            <h2 class="py-4 text-3xl font-semibold text-center bg-blue-600 rounded text-white">Your Personal
                Information</h2>
            <form class="" action="{{ route('profile.update') }}" method="POST">
                @csrf

                <section class="flex item-center justify-center flex-wrap space-x-4 gap-2 p-2 lg:p-4 ">



                    <div class="mb-4 lg:w-[220px]">
                        <label class="block text-gray-700 font-bold mb-2" for="firstName">
                            First Name*
                        </label>
                        <input
                            class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="firstName" name="first_name" type="text"
                            value="{{old('first_name', $user->details->first_name)}}" placeholder="">
                        @error('first_name')
                        <p class="text-red-600">First Name is required.</p>
                        @enderror
                    </div>
                    <div class="mb-4 lg:w-[220px]">
                        <label class="block text-gray-700 font-bold mb-2" for="lastName">
                            Last Name*
                        </label>
                        <input
                            class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="lastName" type="text" name="last_name"
                            value="{{old('last_name', $user->details->last_name)}}" placeholder="">
                        @error('last_name')
                        <p class="text-red-600">Last Name is required.</p>
                        @enderror
                    </div>
                    <div class="mb-4 lg:w-[220px]">
                        <label class="block text-gray-700 font-bold mb-2" for="address">
                            Address*
                        </label>
                        <input
                            class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="address" type="text" name="address" value="{{old('address', $user->details->address)}}"
                            placeholder="">
                        @error('address')
                        <p class="text-red-600">Address is required.</p>
                        @enderror
                    </div>
                    <div class="mb-4 lg:w-[220px]">
                        <label class="block text-gray-700 font-bold mb-2" for="Apt./Suite">
                            Apt./Suite #:
                        </label>
                        <input
                            class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="AptSuite" type="text" name="suit" value="{{old('suit', $user->details->suit )}}"
                            placeholder=" ">
                    </div>
                    <div class="mb-4 lg:w-[220px]">
                        <label class="block text-gray-700 font-bold mb-2" for="city">
                            City*
                        </label>
                        <input
                            class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="city" type="text" name="city" value="{{old('city', $user->details->city)}}"
                            placeholder="">
                        @error('city')
                        <p class="text-red-600">City is required.</p>
                        @enderror
                    </div>

                    <div class="mb-4 lg:w-[220px]"> <label class="block text-gray-700 font-bold mb-2" for="state">
                            State*
                        </label>

                        <select
                            class="lg:w-[220px] border border-gray-200 text-gray-700 py-2 px-8  rounded-md leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            name="user_state_id" value="{{old('user_state_id', $user->details->user_state_id) }}>
                                <option selected="" value="">Select Your State
                                </option>
                                @forelse($states as $state)
                                <option value=" {{$state->id}}" {{ $user->details->user_state_id == $state->id ?
                            'selected' : '' }}>{{$state->name}}</option>
                            @empty
                            @endforelse
                        </select>

                        @error('user_state_id')
                        <p class="text-red-600">State is required.</p>
                        @enderror
                    </div>
                    <div class="mb-4 lg:w-[220px]"> <label class="block text-gray-700 font-bold mb-2" for="zip">
                            Zip*
                        </label> <input
                            class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="zip" type="text" name="zip_code" value="{{old('zip_code', $user->details->zip_code)}}">
                        @error('zip_code')
                        <p class="text-red-600">Zip Code is required.</p>
                        @enderror
                    </div>
                    <div class="mb-4 lg:w-[220px]">
                        <label class="block text-gray-700 font-bold mb-2" for="daytimePhone">
                            Daytime Phone*
                        </label>
                        <input
                            class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="daytimePhone" type="text" name="phone" value="{{old('phone', $user->details->phone)}}"
                            placeholder="">
                        @error('phone')
                        <p class="text-red-600">Phone is required.</p>
                        @enderror
                    </div>

                    <div class="mb-4 lg:w-[220px]"> <label class="block text-gray-700 font-bold mb-2"
                            for="alternatePhone">
                            Alternate Phone </label> <input
                            class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="alternatePhone" type="text" name="alternate_phone"
                            value="{{old('alternate_phone', $user->details->alternate_phone)}}"> </div>

                    <div class="mb-4 lg:w-[220px]">
                        <label class="block text-gray-700 font-bold mb-2" for="emailAddress">
                            Email Address*
                        </label>
                        <input
                            class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="emailAddress" type="email" name="email_address"
                            value="{{old('email_address', $user->email)}}">
                        @error('email_address')
                        <p class="text-red-600">Email is required.</p>
                        @enderror
                    </div>
                    <div class="mb-4 lg:w-[220px]"> <label class="block pl-2 text-gray-700 font-bold mb-2"
                            for="confirmEmail"> Confirm
                            Email* </label> <input
                            class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="confirmEmail" type="email" name="confirm_email"
                            value="{{old('confirm_email', $user->email)}}">
                        @error('confirm_email')
                        <p class="text-red-600">Confirm Email is required and same.</p>
                        @enderror
                    </div>
                    <div class="mb-4 lg:w-[220px]">
                        <label class="block text-gray-700 font-bold mb-2" for="driverLicenseNumber">
                            Driver's License #*
                        </label>
                        <input
                            class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="driverLicenseNumber" type="text" name="driver_license"
                            value="{{old('driver_license', $user->details->driver_license)}}">
                        @error('driver_license')
                        <p class="text-red-600">Driver License is required.</p>
                        @enderror
                    </div>
                    <div class="mb-4 lg:w-[220px]"> <label class="block text-gray-700 font-bold mb-2"
                            for="driverLicenseState">
                            Driver's License State* </label>
                        <select
                            class="boder text-gray-700 py-2 px-8  rounded-md leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            name="state_id" id="DLNState" value="{{old('state_id', $user->details->state_id)}}">
                            <option value="">Select Your State
                            </option>
                            @forelse($states as $state)
                            <option value="{{$state->id}}" {{ $user->details->state_id == $state->id ? 'selected' : ''
                                }}>{{$state->name}}</option>
                            @empty
                            @endforelse
                        </select>
                        @error('state_id')
                        <p class="text-red-600">License State is required.</p>
                        @enderror

                    </div>



                    <div class="lg:w-[240px] ">
                        <label class="block text-gray-700 font-bold mb-2">
                            Birth Date*: </label>

                        <div id="BirthDateInputWrap" class="regInputWrap">
                            <input type="date" name="dob" value="{{old('dob', $user->details->dob)}}"
                                class="w-full p-2">
                        </div>

                        @error('dob')
                        <p class="text-red-600">Date of birth is required.</p>
                        @enderror
                    </div>
                    <!-- date of birth -->


                    <div class="mb-4 p-2 rounded-md">
                        <label class="block text-gray-700 font-bold mb-2" for="gender"> Gender*</label>
                        <div class="flex gap-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="male" {{
                                    ($user->details->gender == 'male') ? 'checked' : ((old('gender') == 'male') ?
                                'checked' : '') }} >
                                <label class="form-check-label" for="male"> Male
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="female" {{
                                    ($user->details->gender == 'female') ? 'checked' : (old('gender') == 'female' ?
                                'checked' : '') }}>
                                <label class="form-check-label" for="female"> Female </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="other" value="other" {{
                                    ($user->details->gender == 'other') ? 'checked' : (old('gender') == 'other' ?
                                'checked' : '') }}>
                                <label class="form-check-label" for="other"> Other </label>
                            </div>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" type="radio" name="gender" id="ratherNotSay"
                                    value="not_to_say" {{ ($user->details->gender == 'not_to_say') ? 'checked' :
                                (old('gender') == 'not_to_say' ? 'checked' : '') }}>
                                <label class="form-check-label" for="ratherNotSay"> Rather not say </label>
                            </div>
                        </div>

                        @error('gender')
                        <p class="text-red-600">Gender is required.</p>
                        @enderror
                    </div>

                </section>
                <h2 class="w-full text-2xl bg-blue-600 text-white text-center py-3">California Traffic Ticket
                    Information</h2>
                <section>

                    <div class="flex item-center justify-between flex-col lg:flex-row">


                        <div id="countyWrap" class="lg:w-1/2  p-3 m-4 bg-slate-100 rounded-md">
                            <label for="county" class="my-1">Choose County Where Citation Occurred*:</label>
                            <select class="bg-white p-2 w-full border-none" id="county" name="ticket_county"
                                value="{{old('ticket_county', $user->details->ticket_county)}}">
                                <option value="">Select County</option>
                                @forelse($data->county as $county)
                                <option value="{{$county->id}}" {{ $user->details->ticket_county == $county->id ?
                                    'selected' : '' }}>{{$county->name}}</option>
                                @empty
                                @endforelse
                            </select>
                            <p class="text-xs my-2">

                                Please select the county where you received your traffic citation (the county where your
                                ticket was issued.)
                            </p>

                            @error('ticket_county')
                            <p class="text-red-600">County is required.</p>
                            @enderror
                        </div>
                        <div id="courtWrap" class="lg:w-1/2  p-3 m-4 bg-slate-100 rounded-md">
                            <label for="court" class="my-1">Choose Court Where Citation Occurred*:</label>
                            <select class="bg-white p-2 w-full border-none " id="court"
                                value="{{old('ticket_citation', $user->details->ticket_citation)}}"
                                name="ticket_citation" disabled>
                                <option value="">Select Court First</option>
                            </select>
                            <p class="text-xs my-2">

                                Please select the Court listed on your paperwork (the Court that issued your
                                courtesy/warning notice).
                            </p>

                            @error('ticket_citation')
                            <p class="text-red-600">Court is required.</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex item-center justify-between flex-col lg:flex-row">
                        <div id="ticket_number" class="lg:w-1/2  p-3 m-4 bg-slate-100 rounded-md">
                            <label for="ticket_number" class="my-1">Enter Case (Ticket/Citation) Number*:</label>
                            <input type="text" class="w-full p-2" name="ticket_number"
                                value="{{old('ticket_number', $user->details->ticket_number)}}">
                            <p class="text-xs my-2">
                                Please enter your citation or case number. Please enter all letters and numbers of your
                                case number (or ticket/citation number)
                            </p>
                            @error('ticket_number')
                            <p class="text-red-600">Ticket number is required.</p>
                            @enderror
                        </div>
                        <div id="due_date" class="lg:w-1/2  p-3 m-4 bg-slate-100 rounded-md">
                            <label for="due_date" class="my-1">Enter Traffic School Due Date*:</label>
                            <input class="w-full p-2" type="date" name="ticket_duedate"
                                value="{{old('ticket_duedate', $user->details->ticket_duedate)}}">
                            <p class="text-xs my-2">
                                The due date is assigned by your Court. You must pass your traffic school course by this
                                Court assigned due date.
                            </p>
                            @error('ticket_duedate')
                            <p class="text-red-600">Due Date is required.</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex item-center justify-between flex-col lg:flex-row">
                        <div id="lea_code" class="w-full  p-3 m-4 bg-slate-100 rounded-md hidden">
                            <label for="lea_code" class="my-1">LEA Code*:</label>
                            <select class="w-full p-2" id="lea" name="ticket_lea_code"
                                value="{{old('ticket_lea_code', $user->details->ticket_lea_code)}}">

                            </select>

                            @error('ticket_lea_code')
                            <p class="text-red-600">LEA Code is required.</p>
                            @enderror

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

                </section>
                <div class="btns flex item-center justify-end px-8 py-4 gap-2">
                    <button class="px-4 py-2 text-lg  text-white bg-blue-600 rounded-md">Update My Info</button>
                    {{-- <button class="px-4 py-2 text-lg border border-blue-600 text-blue-600 rounded-md">Cancel Update
                        --}}
                        {{-- </button> --}}
                </div>
            </form>

            <!-- <p class="px-8">*indicates required information</p> -->

        </div>

    </section>

</main>

@dump($user->details->ticket_citation)

@endsection

@section('scripts')
<script>
function court(params, court_id) {
    $('#court').html('');
    $.get('{{ route("profile", request()->id)  }}', {'county_id': params}, function (data) {
        if (data.success) {
            $('#court').removeAttr('disabled');
            $('#court').append('<option value="">Select Court</option>');
            $.each(data.data, function (ind, court) {
                if (court_id == court.id) {
                    $('#court').append('<option value="' + court.id + '" selected >' + court.court_name + ' -- ' + court.court_number + '</option>');
                }else{
                    $('#court').append('<option value="' + court.id + '" >' + court.court_name + ' -- ' + court.court_number + '</option>');
                }
            });
        }
    });
}

court("{{$user->details->ticket_county}}", "{{$user->details->ticket_citation}}");


function lea(param, lea_id) {
    $('#lea').html('');
                $.get('{{ route("profile", request()->id)  }}', {'court_id': param}, function (data) {
                    if (data.success) {
                        $('#lea_code').show();
                        $('#lea').append('<option value="">Select Lea Code</option>');
                        $.each(data.data, function (ind, lea) {
                            if (lea.id == lea_id) {
                                $('#lea').append('<option value="' + lea.id + '"selected>' + lea.name + ' -- ' + lea.lea_code + '</option>');
                            }else{

                                $('#lea').append('<option value="' + lea.id + '">' + lea.name + ' -- ' + lea.lea_code + '</option>');
                            }
                        });
                    }

                    if (!data.success) {
                        $('#lea_code').hide();
                    }
                });
 }

 lea("{{$user->details->ticket_citation}}", "{{$user->details->ticket_lea_code}}")



        $('document').ready(function (e) {



            $('body').on('change', '#county', function (e) {
                e.preventDefault();
                $('#court').html('');
                $.get('{{ route("profile", request()->id)  }}', {'county_id': $(this).val()}, function (data) {
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
                $.get('{{ route("profile", request()->id)  }}', {'court_id': $(this).val()}, function (data) {
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
