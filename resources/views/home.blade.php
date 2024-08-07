@extends('layouts.page')

@section('content')

{{--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>--}}
<main class="overflow-hidden px-8">


    <section class="top py-8">
        <div class="flex item-center justify-center space-x-4 flex-wrap md:flex-nowrap px-8">
            <a href="#"
                class="continueLink flex item-center justify-center gap-2 font-bold shadow-md p-2 px-4 rounded-full hover:shadow-none hover:scale-110 hover:border hover:text-blue-600 hover:border-blue-600 ">
                <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.91 11.672a.375.375 0 0 1 0 .656l-5.603 3.113a.375.375 0 0 1-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112Z" />
                    </svg>
                </span>
                <p>Continue Course</p>
            </a>
            <a href="#"
                class="flex item-center justify-center gap-2 font-bold shadow-md p-2 px-4 rounded-full hover:shadow-none hover:scale-110 hover:border hover:text-blue-600 hover:border-blue-600 ">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                    </svg>
                </span>
                <p>Leave Us Feedback</p>
            </a>


            <a href="{{ route('logout') }}"
                class="flex item-center justify-center gap-2 font-bold shadow-md p-2 px-4 rounded-full hover:shadow-none hover:scale-110 hover:border hover:text-blue-600 hover:border-blue-600 "
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </span>
                <p>Save & Log Off</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </section>
    <section class="secondSection flex item-center justify-center px-8 py-4 md:py-8">
        <h2 class="text-md md:text-3xl font-bold md:pl-8 pr-2 py-4 bg-blue-600 text-white rounded-full text-center ">
            California Traffic School for <span
                class="md:text-3xl rounded-full md:text-blue-600 md:bg-white md:px-5 md:py-2 md:shadow-2xl"> {{
                Auth::user()->details->first_name }} {{ Auth::user()->details->last_name }}</span>
        </h2>
    </section>
    @if(!isset($course->order) || $course->order->status !== 'paid')
    <section
        class="mx-auto md:rounded-lg px-4 md:px-8 bg-slate-200 flex item-center  xl:w-3/5 justify-center flex-col py-8">
        <div class="note flex item-center justify-between mb-2">
            <span class="flex item-center justify-center gap-2 text-red-600 mt-2 font-bold inline-block"><svg
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                </svg>
                Please Note
            </span>
            <button class="purchase-course bg-blue-600 px-6 py-3 text-white rounded-full font-bold shadow-2xl">Purchase
                Course
            </button>
        </div>
        <p>You will need to make payment in order to take the final exam and have a completion certificate processed.
        </p>
    </section>
    @endif

    <!-- two section course start, start from here -->
    <main class="flex flex-wrap sm:flex-nowrap item-center justify-center xl:px-96 gap-4 py-8">
        <div class="course bg-slate-200 md:basis-3/4 p-2 md:p-8 rounded-md">
            <div class="text_top">
                <h1 class="md:text-3xl text-xl text-center lg:text-left font-bold text-blue-600">
                    Welcome to Traffic School
                    <span class="bg-white px-6 py-1 rounded-full shadow-md">{{ Auth::user()->details->first_name
                        }}</span>
                </h1>
                <p class="mt-4 md:text-[18px]">Please complete each section & its review test, pay the required
                    fees, and complete the final exam to earn your completion certificate.

                </p>
            </div>
            <ul class="py-8">
                @php $index = 1; $prevStatus = 0; $continueLink = null; @endphp

                @foreach($course->parts ?? [] as $part)

                @php $status = $part->part_read->first()->status ?? 0; @endphp
                @if($status == 1)

                <li class="border border-slate-100 py-4 rounded-md mb-2 bg-white flex justify-between">
                    <a href="javascript:void(0)" class="flex gap-2">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32" height="32" viewBox="0 0 48 48">
                                <linearGradient id="I9GV0SozQFknxHSR6DCx5a_70yRC8npwT3d_gr1" x1="9.858" x2="38.142" y1="9.858" y2="38.142" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#21ad64"></stop><stop offset="1" stop-color="#088242"></stop></linearGradient><path fill="url(#I9GV0SozQFknxHSR6DCx5a_70yRC8npwT3d_gr1)" d="M44,24c0,11.045-8.955,20-20,20S4,35.045,4,24S12.955,4,24,4S44,12.955,44,24z"></path><path d="M32.172,16.172L22,26.344l-5.172-5.172c-0.781-0.781-2.047-0.781-2.828,0l-1.414,1.414	c-0.781,0.781-0.781,2.047,0,2.828l8,8c0.781,0.781,2.047,0.781,2.828,0l13-13c0.781-0.781,0.781-2.047,0-2.828L35,16.172	C34.219,15.391,32.953,15.391,32.172,16.172z" opacity=".05"></path><path d="M20.939,33.061l-8-8c-0.586-0.586-0.586-1.536,0-2.121l1.414-1.414c0.586-0.586,1.536-0.586,2.121,0	L22,27.051l10.525-10.525c0.586-0.586,1.536-0.586,2.121,0l1.414,1.414c0.586,0.586,0.586,1.536,0,2.121l-13,13	C22.475,33.646,21.525,33.646,20.939,33.061z" opacity=".07"></path><path fill="#fff" d="M21.293,32.707l-8-8c-0.391-0.391-0.391-1.024,0-1.414l1.414-1.414c0.391-0.391,1.024-0.391,1.414,0	L22,27.758l10.879-10.879c0.391-0.391,1.024-0.391,1.414,0l1.414,1.414c0.391,0.391,0.391,1.024,0,1.414l-13,13	C22.317,33.098,21.683,33.098,21.293,32.707z"></path>
                                </svg>
                        </span>
                        <p class="text-md md:text-xl font-bold text-blue-600">{{$part->name}}</p>

                    </a>
                    <p class="m-0 mr-5 text-green-600">Passed</p>
                </li>

                @elseif( $index == 1 || $prevStatus == 1)
                @php
                    $continueLink = route('page',['id' => $part->id]); // Store link of last open item
                @endphp

                <li class="bg-white py-4 rounded-md mb-2 shadow-md">
                    <a href="{{route('page',['id' => $part->id])}}" class="flex gap-2">
                        <span>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16 2C19.31 2 22 4.693 22 8.006V23.994C21.9995 25.5857 21.3674 27.1121 20.2424 28.2382C19.1175 29.3642 17.5917 29.9979 16 30C12.69 30 10 27.307 10 23.994V8.006C10.0005 6.41431 10.6326 4.88788 11.7576 3.76182C12.8825 2.63576 14.4083 2.00212 16 2Z"
                                    fill="#1C1C1C" />
                                <path
                                    d="M16 27C16.7956 27 17.5587 26.6839 18.1213 26.1213C18.6839 25.5587 19 24.7956 19 24C19 23.2044 18.6839 22.4413 18.1213 21.8787C17.5587 21.3161 16.7956 21 16 21C15.2044 21 14.4413 21.3161 13.8787 21.8787C13.3161 22.4413 13 23.2044 13 24C13 24.7956 13.3161 25.5587 13.8787 26.1213C14.4413 26.6839 15.2044 27 16 27Z"
                                    fill="#00D26A" />
                                <path
                                    d="M17 24C17.2652 24 17.5196 23.8946 17.7071 23.7071C17.8946 23.5196 18 23.2652 18 23C18 22.7348 17.8946 22.4804 17.7071 22.2929C17.5196 22.1054 17.2652 22 17 22C16.7348 22 16.4804 22.1054 16.2929 22.2929C16.1054 22.4804 16 22.7348 16 23C16 23.2652 16.1054 23.5196 16.2929 23.7071C16.4804 23.8946 16.7348 24 17 24Z"
                                    fill="#00F397" />
                                <path
                                    d="M16 11C16.7956 11 17.5587 10.6839 18.1213 10.1213C18.6839 9.55871 19 8.79565 19 8C19 7.20435 18.6839 6.44129 18.1213 5.87868C17.5587 5.31607 16.7956 5 16 5C15.2044 5 14.4413 5.31607 13.8787 5.87868C13.3161 6.44129 13 7.20435 13 8C13 8.79565 13.3161 9.55871 13.8787 10.1213C14.4413 10.6839 15.2044 11 16 11Z"
                                    fill="#F8312F" />
                                <path
                                    d="M16 19C16.7956 19 17.5587 18.6839 18.1213 18.1213C18.6839 17.5587 19 16.7956 19 16C19 15.2044 18.6839 14.4413 18.1213 13.8787C17.5587 13.3161 16.7956 13 16 13C15.2044 13 14.4413 13.3161 13.8787 13.8787C13.3161 14.4413 13 15.2044 13 16C13 16.7956 13.3161 17.5587 13.8787 18.1213C14.4413 18.6839 15.2044 19 16 19Z"
                                    fill="#FFB02E" />
                                <path
                                    d="M17 8C17.2652 8 17.5196 7.89464 17.7071 7.70711C17.8946 7.51957 18 7.26522 18 7C18 6.73478 17.8946 6.48043 17.7071 6.29289C17.5196 6.10536 17.2652 6 17 6C16.7348 6 16.4804 6.10536 16.2929 6.29289C16.1054 6.48043 16 6.73478 16 7C16 7.26522 16.1054 7.51957 16.2929 7.70711C16.4804 7.89464 16.7348 8 17 8Z"
                                    fill="#FF8687" />
                                <path
                                    d="M17 16C17.2652 16 17.5196 15.8946 17.7071 15.7071C17.8946 15.5196 18 15.2652 18 15C18 14.7348 17.8946 14.4804 17.7071 14.2929C17.5196 14.1054 17.2652 14 17 14C16.7348 14 16.4804 14.1054 16.2929 14.2929C16.1054 14.4804 16 14.7348 16 15C16 15.2652 16.1054 15.5196 16.2929 15.7071C16.4804 15.8946 16.7348 16 17 16Z"
                                    fill="#FCD53F" />
                                <path
                                    d="M12.8002 6.99997C12.4592 6.99997 12.2092 6.67597 12.3492 6.36397C12.6646 5.65936 13.1771 5.06105 13.8249 4.64124C14.4728 4.22143 15.2282 3.99805 16.0002 3.99805C16.7722 3.99805 17.5277 4.22143 18.1755 4.64124C18.8233 5.06105 19.3359 5.65936 19.6512 6.36397C19.7912 6.67597 19.5412 6.99997 19.1992 6.99997C19.0905 6.9964 18.9849 6.96273 18.8941 6.90271C18.8034 6.84268 18.731 6.75865 18.6852 6.65997C18.4364 6.16075 18.0533 5.74078 17.579 5.44723C17.1047 5.15368 16.558 4.99817 16.0002 4.99817C15.4424 4.99817 14.8957 5.15368 14.4214 5.44723C13.9471 5.74078 13.564 6.16075 13.3152 6.65997C13.2694 6.75865 13.1971 6.84268 13.1063 6.90271C13.0156 6.96273 12.909 6.9964 12.8002 6.99997ZM12.3492 14.364C12.2092 14.676 12.4592 15 12.8012 15C12.91 14.9964 13.0156 14.9627 13.1063 14.9027C13.1971 14.8427 13.2694 14.7587 13.3152 14.66C13.564 14.1608 13.9471 13.7408 14.4214 13.4472C14.8957 13.1537 15.4424 12.9982 16.0002 12.9982C16.558 12.9982 17.1047 13.1537 17.579 13.4472C18.0533 13.7408 18.4364 14.1608 18.6852 14.66C18.7842 14.858 18.9782 15 19.1992 15C19.5412 15 19.7912 14.676 19.6512 14.364C19.3355 13.6597 18.8229 13.0618 18.1751 12.6422C17.5273 12.2227 16.772 11.9995 16.0002 11.9995C15.2284 11.9995 14.4731 12.2227 13.8253 12.6422C13.1775 13.0618 12.6649 13.6597 12.3492 14.364ZM12.3482 22.364C12.2082 22.676 12.4582 23 12.8002 23C12.909 22.9964 13.0146 22.9627 13.1053 22.9027C13.1961 22.8427 13.2684 22.7587 13.3142 22.66C13.563 22.1608 13.9461 21.7408 14.4204 21.4472C14.8947 21.1537 15.4414 20.9982 15.9992 20.9982C16.557 20.9982 17.1037 21.1537 17.578 21.4472C18.0523 21.7408 18.4354 22.1608 18.6842 22.66C18.7832 22.858 18.9772 23 19.1982 23C19.5402 23 19.7902 22.676 19.6502 22.364C19.3349 21.6594 18.8223 21.0611 18.1745 20.6412C17.5267 20.2214 16.7712 19.998 15.9992 19.998C15.2272 19.998 14.4718 20.2214 13.8239 20.6412C13.1761 21.0611 12.6636 21.6594 12.3482 22.364Z"
                                    fill="#636363" />
                            </svg>
                        </span>
                        <p class="text-md md:text-xl font-bold text-blue-600">{{$part->name}}</p>
                    </a>
                </li>
                @else
                <li class="border border-slate-100 py-4 rounded-md mb-2">
                    <a href="javascript:void(0)" class="flex gap-2">
                        <span>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.8891 7.03115V23.0312C20.8891 24.7423 19.4891 26.1423 17.778 26.1423H14.2224C12.5113 26.1423 11.1113 24.7423 11.1113 23.0312V7.03115C11.1113 5.32004 12.5113 3.92004 14.2224 3.92004H17.778C19.4891 3.92004 20.8891 5.32004 20.8891 7.03115Z"
                                    fill="#D0CFCE" />
                                <path
                                    d="M15.9996 23.6853C17.2269 23.6853 18.2218 22.6904 18.2218 21.4631C18.2218 20.2358 17.2269 19.2408 15.9996 19.2408C14.7723 19.2408 13.7773 20.2358 13.7773 21.4631C13.7773 22.6904 14.7723 23.6853 15.9996 23.6853Z"
                                    fill="#B1CC33" />
                                <path
                                    d="M15.9996 17.4631C17.2269 17.4631 18.2218 16.4682 18.2218 15.2409C18.2218 14.0136 17.2269 13.0187 15.9996 13.0187C14.7723 13.0187 13.7773 14.0136 13.7773 15.2409C13.7773 16.4682 14.7723 17.4631 15.9996 17.4631Z"
                                    fill="#F4AA41" />
                                <path
                                    d="M15.9996 10.7965C17.2269 10.7965 18.2218 9.80157 18.2218 8.57427C18.2218 7.34697 17.2269 6.35205 15.9996 6.35205C14.7723 6.35205 13.7773 7.34697 13.7773 8.57427C13.7773 9.80157 14.7723 10.7965 15.9996 10.7965Z"
                                    fill="#EA5A47" />
                                <path
                                    d="M20.8891 7.11111V23.1111C20.8891 24.8222 19.4891 26.2222 17.778 26.2222H14.2224C12.5113 26.2222 11.1113 24.8222 11.1113 23.1111V7.11111C11.1113 5.4 12.5113 4 14.2224 4H17.778C19.4891 4 20.8891 5.4 20.8891 7.11111Z"
                                    stroke="black" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M16.0005 23.7654C17.2278 23.7654 18.2228 22.7704 18.2228 21.5431C18.2228 20.3158 17.2278 19.3209 16.0005 19.3209C14.7732 19.3209 13.7783 20.3158 13.7783 21.5431C13.7783 22.7704 14.7732 23.7654 16.0005 23.7654Z"
                                    stroke="black" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M16.0005 17.5431C17.2278 17.5431 18.2228 16.5482 18.2228 15.3209C18.2228 14.0936 17.2278 13.0986 16.0005 13.0986C14.7732 13.0986 13.7783 14.0936 13.7783 15.3209C13.7783 16.5482 14.7732 17.5431 16.0005 17.5431Z"
                                    stroke="black" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M16.0005 10.8765C17.2278 10.8765 18.2228 9.88153 18.2228 8.65423C18.2228 7.42693 17.2278 6.43201 16.0005 6.43201C14.7732 6.43201 13.7783 7.42693 13.7783 8.65423C13.7783 9.88153 14.7732 10.8765 16.0005 10.8765Z"
                                    stroke="black" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                        <p class="text-md md:text-xl font-bold text-blue-600">{{$part->name}}</p>

                    </a>
                </li>

                @endif
                @php $index++; $prevStatus = $status; @endphp
                @endforeach

                @if(isset($course->order) && $course->order->status == 'paid')
                <li class="bg-white py-4 rounded-md mb-2 shadow-md">
                    <a href="{{route('final.quiz',['id' => $course->id])}}" class="flex gap-2">
                        <span>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16 2C19.31 2 22 4.693 22 8.006V23.994C21.9995 25.5857 21.3674 27.1121 20.2424 28.2382C19.1175 29.3642 17.5917 29.9979 16 30C12.69 30 10 27.307 10 23.994V8.006C10.0005 6.41431 10.6326 4.88788 11.7576 3.76182C12.8825 2.63576 14.4083 2.00212 16 2Z"
                                    fill="#1C1C1C" />
                                <path
                                    d="M16 27C16.7956 27 17.5587 26.6839 18.1213 26.1213C18.6839 25.5587 19 24.7956 19 24C19 23.2044 18.6839 22.4413 18.1213 21.8787C17.5587 21.3161 16.7956 21 16 21C15.2044 21 14.4413 21.3161 13.8787 21.8787C13.3161 22.4413 13 23.2044 13 24C13 24.7956 13.3161 25.5587 13.8787 26.1213C14.4413 26.6839 15.2044 27 16 27Z"
                                    fill="#00D26A" />
                                <path
                                    d="M17 24C17.2652 24 17.5196 23.8946 17.7071 23.7071C17.8946 23.5196 18 23.2652 18 23C18 22.7348 17.8946 22.4804 17.7071 22.2929C17.5196 22.1054 17.2652 22 17 22C16.7348 22 16.4804 22.1054 16.2929 22.2929C16.1054 22.4804 16 22.7348 16 23C16 23.2652 16.1054 23.5196 16.2929 23.7071C16.4804 23.8946 16.7348 24 17 24Z"
                                    fill="#00F397" />
                                <path
                                    d="M16 11C16.7956 11 17.5587 10.6839 18.1213 10.1213C18.6839 9.55871 19 8.79565 19 8C19 7.20435 18.6839 6.44129 18.1213 5.87868C17.5587 5.31607 16.7956 5 16 5C15.2044 5 14.4413 5.31607 13.8787 5.87868C13.3161 6.44129 13 7.20435 13 8C13 8.79565 13.3161 9.55871 13.8787 10.1213C14.4413 10.6839 15.2044 11 16 11Z"
                                    fill="#F8312F" />
                                <path
                                    d="M16 19C16.7956 19 17.5587 18.6839 18.1213 18.1213C18.6839 17.5587 19 16.7956 19 16C19 15.2044 18.6839 14.4413 18.1213 13.8787C17.5587 13.3161 16.7956 13 16 13C15.2044 13 14.4413 13.3161 13.8787 13.8787C13.3161 14.4413 13 15.2044 13 16C13 16.7956 13.3161 17.5587 13.8787 18.1213C14.4413 18.6839 15.2044 19 16 19Z"
                                    fill="#FFB02E" />
                                <path
                                    d="M17 8C17.2652 8 17.5196 7.89464 17.7071 7.70711C17.8946 7.51957 18 7.26522 18 7C18 6.73478 17.8946 6.48043 17.7071 6.29289C17.5196 6.10536 17.2652 6 17 6C16.7348 6 16.4804 6.10536 16.2929 6.29289C16.1054 6.48043 16 6.73478 16 7C16 7.26522 16.1054 7.51957 16.2929 7.70711C16.4804 7.89464 16.7348 8 17 8Z"
                                    fill="#FF8687" />
                                <path
                                    d="M17 16C17.2652 16 17.5196 15.8946 17.7071 15.7071C17.8946 15.5196 18 15.2652 18 15C18 14.7348 17.8946 14.4804 17.7071 14.2929C17.5196 14.1054 17.2652 14 17 14C16.7348 14 16.4804 14.1054 16.2929 14.2929C16.1054 14.4804 16 14.7348 16 15C16 15.2652 16.1054 15.5196 16.2929 15.7071C16.4804 15.8946 16.7348 16 17 16Z"
                                    fill="#FCD53F" />
                                <path
                                    d="M12.8002 6.99997C12.4592 6.99997 12.2092 6.67597 12.3492 6.36397C12.6646 5.65936 13.1771 5.06105 13.8249 4.64124C14.4728 4.22143 15.2282 3.99805 16.0002 3.99805C16.7722 3.99805 17.5277 4.22143 18.1755 4.64124C18.8233 5.06105 19.3359 5.65936 19.6512 6.36397C19.7912 6.67597 19.5412 6.99997 19.1992 6.99997C19.0905 6.9964 18.9849 6.96273 18.8941 6.90271C18.8034 6.84268 18.731 6.75865 18.6852 6.65997C18.4364 6.16075 18.0533 5.74078 17.579 5.44723C17.1047 5.15368 16.558 4.99817 16.0002 4.99817C15.4424 4.99817 14.8957 5.15368 14.4214 5.44723C13.9471 5.74078 13.564 6.16075 13.3152 6.65997C13.2694 6.75865 13.1971 6.84268 13.1063 6.90271C13.0156 6.96273 12.909 6.9964 12.8002 6.99997ZM12.3492 14.364C12.2092 14.676 12.4592 15 12.8012 15C12.91 14.9964 13.0156 14.9627 13.1063 14.9027C13.1971 14.8427 13.2694 14.7587 13.3152 14.66C13.564 14.1608 13.9471 13.7408 14.4214 13.4472C14.8957 13.1537 15.4424 12.9982 16.0002 12.9982C16.558 12.9982 17.1047 13.1537 17.579 13.4472C18.0533 13.7408 18.4364 14.1608 18.6852 14.66C18.7842 14.858 18.9782 15 19.1992 15C19.5412 15 19.7912 14.676 19.6512 14.364C19.3355 13.6597 18.8229 13.0618 18.1751 12.6422C17.5273 12.2227 16.772 11.9995 16.0002 11.9995C15.2284 11.9995 14.4731 12.2227 13.8253 12.6422C13.1775 13.0618 12.6649 13.6597 12.3492 14.364ZM12.3482 22.364C12.2082 22.676 12.4582 23 12.8002 23C12.909 22.9964 13.0146 22.9627 13.1053 22.9027C13.1961 22.8427 13.2684 22.7587 13.3142 22.66C13.563 22.1608 13.9461 21.7408 14.4204 21.4472C14.8947 21.1537 15.4414 20.9982 15.9992 20.9982C16.557 20.9982 17.1037 21.1537 17.578 21.4472C18.0523 21.7408 18.4354 22.1608 18.6842 22.66C18.7832 22.858 18.9772 23 19.1982 23C19.5402 23 19.7902 22.676 19.6502 22.364C19.3349 21.6594 18.8223 21.0611 18.1745 20.6412C17.5267 20.2214 16.7712 19.998 15.9992 19.998C15.2272 19.998 14.4718 20.2214 13.8239 20.6412C13.1761 21.0611 12.6636 21.6594 12.3482 22.364Z"
                                    fill="#636363" />
                            </svg>
                        </span>
                        <p class="text-md md:text-xl font-bold text-blue-600">Final Quiz</p>

                    </a>
                </li>
                @endif

            </ul>
        </div>
        <div class="info bg-slate-200 md:basis-1/4 p-4 rounded-md">
            <div class="my_info border-slate-300 border-b-2  py-2">
                <h3 class="flex py-2 text-xl item-center justify-between bg-white px-4 rounded text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>

                    <span class="text-xl font-bold"> My Information </span>
                </h3>
                <p class="py-3 px-2"><strong>Name :</strong> <span>{!! auth()->user()->name !!}</span></p>
                <p class="py-3 px-2"><strong>DL #:</strong> <span> {!! str_repeat('*',
                        strlen(auth()->user()->details->driver_license) - 2) .
                        substr(auth()->user()->details->driver_license, -2) !!}</span></p>
                <p class="py-3 px-2"><strong>Case No:</strong> <span> Update My Info</span></p>
                <p class="py-3 px-2"><strong>Court: </strong> <span> Update My Info</span></p>
                <a href="{!! route('profile') !!}">
                    <button class="bg-blue-600 text-white font-bold p-3 w-full rounded">Update My Info</button>
                </a>
            </div>
            <div class="my_info border-slate-300 border-b-2  py-2">
                <h3 class="flex py-2 text-xl item-center justify-between bg-white px-4 rounded text-blue-600">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 15C12 15.7956 12.3161 16.5587 12.8787 17.1213C13.4413 17.6839 14.2044 18 15 18C15.7956 18 16.5587 17.6839 17.1213 17.1213C17.6839 16.5587 18 15.7956 18 15C18 14.2044 17.6839 13.4413 17.1213 12.8787C16.5587 12.3161 15.7956 12 15 12C14.2044 12 13.4413 12.3161 12.8787 12.8787C12.3161 13.4413 12 14.2044 12 15Z"
                            stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M13 17.5V22L15 20.5L17 22V17.5" stroke="black" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M10 19H5C4.46957 19 3.96086 18.7893 3.58579 18.4142C3.21071 18.0391 3 17.5304 3 17V7C3 5.9 3.9 5 5 5H19C19.5304 5 20.0391 5.21071 20.4142 5.58579C20.7893 5.96086 21 6.46957 21 7V17C20.9996 17.3507 20.9071 17.6952 20.7315 17.9988C20.556 18.3025 20.3037 18.5546 20 18.73M6 9H18M6 12H9M6 15H8"
                            stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>


                    <span class="text-xl font-bold"> Certificate Info </span>
                </h3>
                <p class="py-3 px-2"><strong>Your Due Date:</strong> <span> Update My Info</span></p>
                <p class="py-3 px-2"><strong>Certificate Delivery:</strong> <span> - None
                        + Make Payment</span></p>
                <p class="py-3 px-2"><strong>Certificate Processing:</strong> <span>Standard
                        + Get Rush Processing</span></p>

                <!-- <button class="bg-blue-600 text-white font-bold p-3 w-full rounded ">Update My Info</button> -->
            </div>
            <div class="my_info  py-2">
                <h3 class="flex py-2 text-xl item-center justify-between bg-white px-4 rounded text-blue-600">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19 3H17V9.5L14 7.25L11 9.5V3H5V21H19V3ZM13 3V5.5L14 4.75L15 5.5V3H13ZM21 23H3V1H21V23Z"
                            fill="black" />
                    </svg>


                    <span class="text-xl font-bold"> Course Upgrades </span>
                </h3>
                <p class="py-3 px-2"><strong>Audio Read-Along ❔</strong> <span> + Enable Audio Read-Along</span></p>
                <p class="py-3 px-2"><strong>Proof of Completion: </strong> <span> None
                        + Get Mailed Proof Learn More
                        + Get Emailed Proof Learn More</span></p>
                <p class="py-3 px-2"><strong>DMV Driving Record ❔ </strong> <span>+ Order DMV Driving Record</span>
                </p>
                <p class="py-3 px-2"><strong>Copy of Course Manual ❔ </strong> <span>+ Order Copy of Course Manual
                    </span></p>

                <button class="bg-blue-600 text-white font-bold p-3 w-full rounded ">Upgrade Options</button>
            </div>
        </div>
    </main>
    <!-- two section course start, start from here -->
    <section
        class="mx-auto md:rounded-lg  px-4 md:px-8 bg-slate-200 flex item-center xl:w-3/5 justify-center flex-col py-8">
        <div
            class="note flex flex-wrap item-center justify-center xl:flex-nowrap gap-4 item-center lg:justify-between mb-2">
            <span
                class="flex item-center justify-center text-center lg:text-left gap-2 text-2xl mt-2 font-bold inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                </svg>
                <strong>My Feedback (optional): </strong>
            </span>
            <button
                class="bg-blue-600 px-4 xl:px-6 py-3 text-white w-full md:w-auto rounded-full md:font-bold shadow-2xl">
                Your Thoughts
            </button>
        </div>
        <p>Please let us know what you think about our course. We appreciate any feedback you are willing to
            leave.</p>
    </section>
</main>
@endsection

@section('scripts')
<script>
    $('body').on('click', '.purchase-course', function (e) {
           e.preventDefault();
           window.location.href = "{!! route('payment.addon', $course->id) !!}";
        });
    $('.continueLink').attr('href', "{{ $continueLink }}");
</script>
@endsection
