@extends('layouts.page')

@section('content')

    <main class="px-4 no-copy-paste">
        <section class="top py-8">
            <div class="flex item-center justify-center space-x-4 flex-wrap md:flex-nowrap px-8 xl:px-96">
                <a href="#"
                   class="flex item-center justify-center gap-2 font-bold shadow-md p-2 px-4 transition ease-in-out delay-150 duration-200  rounded-full hover:shadow-none hover:scale-110 hover:border hover:text-blue-600 hover:border-blue-600 ">
                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                               class="w-6 h-6">
                            <path fill-rule="evenodd"
                                  d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </span>
                    <p>Save & Log Off
                    </p>
                </a>
                <a href="{!! route('home') !!}"
                   class="flex item-center justify-center gap-2 font-bold shadow-md p-2 px-4 transition ease-in-out delay-150 duration-200  rounded-full hover:shadow-none hover:scale-110 hover:border hover:text-blue-600 hover:border-blue-600 ">
                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                               class="w-6 h-6">
                            <path
                                d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z"/>
                            <path
                                d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z"/>
                        </svg>
                    </span>
                    <p>Course Status
                    </p>
                </a>


                @if ($lessons->onFirstPage())
                    <a href="javascript:void(0);"
                       class="flex item-center justify-center text-slate-500 gap-2 font-bold p-2 px-4 transition ease-in-out delay-150 duration-200  rounded-full">
                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                               class="w-6 h-6">
                            <path fill-rule="evenodd"
                                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-4.28 9.22a.75.75 0 0 0 0 1.06l3 3a.75.75 0 1 0 1.06-1.06l-1.72-1.72h5.69a.75.75 0 0 0 0-1.5h-5.69l1.72-1.72a.75.75 0 0 0-1.06-1.06l-3 3Z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </span>
                        <p>Previous Page
                        </p>
                    </a>
                @else
                    <a href="{!! $lessons->previousPageUrl() !!}"
                       class="flex item-center justify-center gap-2 font-bold shadow-md p-2 px-4 transition ease-in-out delay-150 duration-200  rounded-full hover:shadow-none hover:scale-110 hover:border hover:text-blue-600 hover:border-blue-600 ">
                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                               class="w-6 h-6">
                            <path fill-rule="evenodd"
                                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-4.28 9.22a.75.75 0 0 0 0 1.06l3 3a.75.75 0 1 0 1.06-1.06l-1.72-1.72h5.69a.75.75 0 0 0 0-1.5h-5.69l1.72-1.72a.75.75 0 0 0-1.06-1.06l-3 3Z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </span>
                        <p>Previous Page
                        </p>
                    </a>
                @endif




                @if ($lessons->hasMorePages())
                    <a href="{{ $lessons->nextPageUrl() }}"
                       class="flex item-center justify-center gap-2 font-bold shadow-md p-2 px-4 transition ease-in-out delay-150 duration-200  rounded-full hover:shadow-none hover:scale-110 hover:border hover:text-blue-600 hover:border-blue-600 ">
                        <p>Next Page</p>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="w-6 h-6">
                            <path fill-rule="evenodd"
                                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </span>
                    </a>
                    <a href="#"
                       class="flex item-center justify-center text-slate-500 gap-2 font-bold p-2 px-4 transition ease-in-out delay-150 duration-200  rounded-full">
                        <p>Start Quiz
                        </p>
                        <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                  d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 0 1-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 0 1-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 0 1-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584ZM12 18a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                  clip-rule="evenodd"/>
                        </svg>

                    </span>
                    </a>
                @else
                    <a href="javascript:void(0);"
                       class="flex item-center justify-center text-slate-500 gap-2 font-bold p-2 px-4 transition ease-in-out delay-150 duration-200  rounded-full">

                        <p>Next Page</p>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="w-6 h-6">
                            <path fill-rule="evenodd"
                                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </span>
                    </a>
                    <a href="{!! route('quiz', ['id'=> $id]) !!}"
                       class="flex item-center justify-center gap-2 font-bold shadow-md p-2 px-4 transition ease-in-out delay-150 duration-200  rounded-full hover:shadow-none hover:scale-110 hover:border hover:text-blue-600 hover:border-blue-600 ">
                        <p>Start Quiz
                        </p>
                        <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                  d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 0 1-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 0 1-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 0 1-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584ZM12 18a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                  clip-rule="evenodd"/>
                        </svg>

                    </span>
                    </a>
                @endif

            </div>
        </section>


        <!-- audio section -->
        <section
            class="audio_section bg-blue-600 min-h-64  xl:w-3/4 rounded-xl shadow-xl mx-auto flex item-center justify-center flex-col text-white">
            <p class="text-center text-xl xl:text-3xl font-bold px-4">
                {{--                Audio Read Along - --}}
                {!! $lessons->items()[0]->section->name !!} , Page {!! $lessons->currentPage() !!}
                of {!! $lessons->total() !!}</p>
            {{--<div class="audio flex item-center justify-center py-6 ">
                <audio class="w-3/4 xl:w-2/4" src="./assets/perfect-beauty-191271.mp3" controls></audio>
            </div>--}}
        </section>
        <!-- audio section -->
        <section
            class="xl:w-3/4 mx-auto py-4 bg-slate-200 rounded-xl mt-6 px-6 xl:px-24 flex item-center justify-center flex-col">
            <div class="no-tailwind-base">
                {!! $lessons->items()[0]->lesson_content !!}
            </div>

            <div class="flex item-center justify-between my-6  py-8">
                <p>
                    {!! $lessons->items()[0]->section->name !!} , Page {!! $lessons->currentPage() !!}
                    of {!! $lessons->total() !!}
                </p>
                @if ($lessons->hasMorePages())
                    <a href="{{ $lessons->nextPageUrl() }}"
                       class="flex item-center justify-center gap-2 font-bold shadow-md p-2 px-4 transition ease-in-out delay-150 duration-200  rounded-full hover:shadow-none hover:scale-110 hover:border hover:text-blue-600 hover:border-blue-600 ">
                        <p>Next Page</p>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="w-6 h-6">
                            <path fill-rule="evenodd"
                                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </span>
                    </a>
                @else
                    <a href="javascript:void(0);"
                       class="flex item-center justify-center text-slate-500 gap-2 font-bold p-2 px-4 transition ease-in-out delay-150 duration-200  rounded-full">

                        <p>Next Page</p>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="w-6 h-6">
                            <path fill-rule="evenodd"
                                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm4.28 10.28a.75.75 0 0 0 0-1.06l-3-3a.75.75 0 1 0-1.06 1.06l1.72 1.72H8.25a.75.75 0 0 0 0 1.5h5.69l-1.72 1.72a.75.75 0 1 0 1.06 1.06l3-3Z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </span>
                    </a>
                @endif

            </div>
        </section>
    </main>
@endsection


@section('scripts')
    <script type="text/javascript" src="{{ asset('assets/js/disable-copy-paste.js') }}">
@endsection
