@extends('layouts.page') {{-- Assuming you have an app layout --}}

{{--@section('header')--}}

<!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{--                {{ __('Dashboard') }}--}}
</h2> -->

{{--@endsection--}}

@section('content')
    <main
        class="px-4 sm:px-16  xl:px-48 py-16 bg-slate-100 min-h-screen flex flex-col items-center justify-start space-y-4">
        <div class="top">
            <h1 class="text-3xl md:text-4xl xl:text-5xl font-black text-center">Find a Traffic School Course in Your
                State</h1>
        </div>
        <div class="content flex items-center justify-center md:space-x-8 flex-wrap lg:flex-nowrap">
            <div class="img xl:basis-1/2">
                <img src='./images/traffic-police.svg' alt="trafficpolice" title="traffic police" class="md:1/2">
            </div>
            <div class="lg:basis-1/2 bg-white lg:shadow-2xl px-8 xl:px-24 py-16 rounded-xl">
                <h2 class="text-2xl text-center md:text-left sm:text-3xl md:text-3xl xl:text-4xl font-extrabold py-6">
                    Select the state you need a Traffic School course for.</h2>
                <form action="#">
                    <div class="mb-6">
                        <!-- <label for="state" class="block mb-2 text-sm font-bold text-gray-700">Select the state you need a Traffic School course for:</label> -->
                        <select id="state" name="state" class="w-full p-3 border border-gray-300 rounded">
                            <option value="">-- Select a State --</option>
                            @foreach($states as $state)
                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                            @endforeach
                            <!-- Add more states here -->
                        </select>
                    </div>
                </form>
                <h3 class="text-xl sm:text-2xl font-extrabold py-4">Handling Traffic Tickets with TrafficSchool.com is
                    100% Online & Easy!</h3>
                <ul class=" text-sm md:text-xl md:list-disc">
                    <li>Mask a traffic ticket from your insurance company.</li>
                    <li>Hide points from your driving record.</li>
                    <li>Learn how to drive defensively.</li>
                    <li>Learn new traffic laws, brush up on old ones.</li>
                </ul>
            </div>
        </div>
    </main>

@endsection


@section('scripts')
    <script>
        $(document).ready(function () {
            $('#state').on('change', function (e) {
                e.preventDefault();
                let id = $(this).val();
                let state_url = "{{ route('state.show', [':id']) }}".replace(':id', id);
                if (!id){
                    return window.location.reload();
                }

                return window.location.href = state_url;

            });

            console.log('jQuery works!');

        });
    </script>
@endsection

