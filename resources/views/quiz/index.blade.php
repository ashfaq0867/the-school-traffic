@extends('layouts.page')

@section('content')

    <main class="px-6 xl:px-64">
        <section class="top py-8">
            <div class="flex item-center justify-center space-x-4 flex-wrap md:flex-nowrap px-8 xl:px-96">
                <button type="button"
                   class="submitButton flex item-center justify-center gap-2 font-bold shadow-md p-2 px-4 transition ease-in-out delay-150 duration-200  rounded-full hover:shadow-none hover:scale-110 hover:border hover:text-blue-600 hover:border-blue-600 ">
                    <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path
                            d="M7.5 3.375c0-1.036.84-1.875 1.875-1.875h.375a3.75 3.75 0 0 1 3.75 3.75v1.875C13.5 8.161 14.34 9 15.375 9h1.875A3.75 3.75 0 0 1 21 12.75v3.375C21 17.16 20.16 18 19.125 18h-9.75A1.875 1.875 0 0 1 7.5 16.125V3.375Z"/>
                        <path
                            d="M15 5.25a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963A5.23 5.23 0 0 0 17.25 7.5h-1.875A.375.375 0 0 1 15 7.125V5.25ZM4.875 6H6v10.125A3.375 3.375 0 0 0 9.375 19.5H16.5v1.125c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V7.875C3 6.839 3.84 6 4.875 6Z"/>
                      </svg>

                    </span>
                    <p>Grade Quiz
                    </p>
                </button>
                <a href="#"
                   class="flex item-center justify-center gap-2 font-bold shadow-md p-2 px-4 transition ease-in-out delay-150 duration-200  rounded-full hover:shadow-none hover:scale-110 hover:border hover:text-blue-600 hover:border-blue-600 ">
                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                               class="w-6 h-6">
                        <path fill-rule="evenodd"
                              d="M7.502 6h7.128A3.375 3.375 0 0 1 18 9.375v9.375a3 3 0 0 0 3-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 0 0-.673-.05A3 3 0 0 0 15 1.5h-1.5a3 3 0 0 0-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6ZM13.5 3A1.5 1.5 0 0 0 12 4.5h4.5A1.5 1.5 0 0 0 15 3h-1.5Z"
                              clip-rule="evenodd"/>
                        <path fill-rule="evenodd"
                              d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V9.375ZM6 12a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V12Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 15a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V15Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 18a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V18Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75Z"
                              clip-rule="evenodd"/>
                      </svg>

                    </span>
                    <p>Study Guide
                    </p>
                </a>
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
            </div>
        </section>
        <!-- quiz section start from here -->
        <section class="quiz_section bg-slate-200 rounded-xl py-8">
            <h1 class="text-2xl font-bold px-8 text-blue-600">{{ $data->name  }} Quiz.</h1>
            <h1 class="text-xl font-bold px-8 text-blue-600 mt-6">Please Read Carefully.</h1>
            <p class="px-8 py-3 xl:text-xl border-b-2 border-slate-300">
                Please answer all review section quiz questions to the best of your abilities, and press the "Grade
                Quiz" button when finished. You must receive a score of 70% to pass. You may re- take the review section
                quiz as many times as necessary to receive a passing score of 70%. <br> <br>
                You may review the course material at any time to assist you in answering each question. Simply click on
                the "Study Guide" button.
            </p>


            <form class="mx-auto px-8" method="post" action="{{route('quiz', request()->id)}}" id="quiz_form">
                @csrf
                @php $count = 1; $count_multiple = 1; @endphp
                @forelse($data->quiz as $ind => $quiz)

                    @if($quiz->type === 'boolean')
                        @if($count === 1)
                            <h2 class="text-2xl font-bold my-6">True & False</h2>
                        @endif
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2 xl:text-2xl">
                                {!! $count !!}. {!! $quiz->question !!}
                            </label>
                            @php
                                $letters = range('A', 'Z');
                                $counter = 0;
                            @endphp
                            @forelse($quiz->answers as $option)
                                <div class="flex items-center">
                                    {!! $letter = $letters[$counter] !!} &nbsp;
                                    <input id="{!! 'boolean_'. $option->id !!}"
                                           name="boolean_{!! $quiz->id !!}"
                                           type="radio"
                                           class="form-radio"
                                           value="{!! $letter . '_' . $option->id !!}"
                                           {{ old('boolean_'.$quiz->id) == $letter . '_' . $option->id ? 'checked' : '' }}
{{--                                           {{  $quiz->answer == $option->id  ? 'checked' : '' }}--}}
                                           required>
                                    <label class="form-radio-label ml-3 xl:text-xl"
                                           for="{!! 'boolean_'. $option->id !!}">
                                        {!! $option->name !!}
                                    </label>
                                </div>

                                @php $counter++; @endphp
                            @empty
                                <h2 class="text-2xl font-bold my-6">No option found</h2>
                            @endforelse
                            @error('boolean_'.$quiz->id)
                            <p class="text-red-600 text-xl">Answer is required.</p>
                            @enderror

                        </div>
                        @php $count++; @endphp
                    @elseif($quiz->type === 'multiple')
                        @if($count_multiple === 1)
                            <h2 class="text-2xl font-bold my-6">Multiple Choice</h2>
                        @endif
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2 xl:text-2xl">
                                {!! $count_multiple !!}. {!! $quiz->question !!}
                            </label>

                            @php
                                $letters = range('A', 'Z');
                                $counter = 0;
                            @endphp
                            @forelse($quiz->answers as $option)
                                <div class="flex items-center mt-2">
                                    {!! $letter = $letters[$counter] !!} &nbsp;
                                    <input id="{!! 'multiple_'. $option->id !!}"
                                           name="multiple_{!! $quiz->id !!}"
                                           type="radio"
                                           class="form-radio"
                                           value="{!! $letter . '_' . $option->id !!}"
                                           {{ old('multiple_'.$quiz->id) == $letter . '_' . $option->id ? 'checked' : '' }}
{{--                                           {{  $quiz->answer == $option->id  ? 'checked' : '' }}--}}
                                           required>
                                    <label class="form-radio-label ml-3 xl:text-xl"
                                           for="{!! 'multiple_'. $option->id !!}">
                                        {!! $option->name !!}
                                    </label>
                                </div>
                                @php $counter++; @endphp
                            @empty
                                <h2 class="text-2xl font-bold my-6">No option found</h2>
                            @endforelse
                            @error('multiple_'.$quiz->id)
                            <p class="text-red-600 text-xl">Answer is required.</p>
                            @enderror

                        </div>
                        @php $count_multiple++; @endphp
                    @endif
                @empty
                    <h2 class="text-2xl font-bold my-6">No Quiz Found</h2>
                @endforelse

            </form>
        </section>
        <section class="top py-8">
            <div class="flex item-center justify-center space-x-4 flex-wrap md:flex-nowrap px-8 xl:px-96">
                <button type="button"
                        class="submitButton flex item-center justify-center gap-2 font-bold shadow-md p-2 px-4 transition ease-in-out delay-150 duration-200  rounded-full hover:shadow-none hover:scale-110 hover:border hover:text-blue-600 hover:border-blue-600 ">
                    <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path
                            d="M7.5 3.375c0-1.036.84-1.875 1.875-1.875h.375a3.75 3.75 0 0 1 3.75 3.75v1.875C13.5 8.161 14.34 9 15.375 9h1.875A3.75 3.75 0 0 1 21 12.75v3.375C21 17.16 20.16 18 19.125 18h-9.75A1.875 1.875 0 0 1 7.5 16.125V3.375Z"/>
                        <path
                            d="M15 5.25a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963A5.23 5.23 0 0 0 17.25 7.5h-1.875A.375.375 0 0 1 15 7.125V5.25ZM4.875 6H6v10.125A3.375 3.375 0 0 0 9.375 19.5H16.5v1.125c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V7.875C3 6.839 3.84 6 4.875 6Z"/>
                      </svg>

                    </span>
                    <p>Grade Quiz
                    </p>
                </button>
                <a href="#"
                   class="flex item-center justify-center gap-2 font-bold shadow-md p-2 px-4 transition ease-in-out delay-150 duration-200  rounded-full hover:shadow-none hover:scale-110 hover:border hover:text-blue-600 hover:border-blue-600 ">
                    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                               class="w-6 h-6">
                        <path fill-rule="evenodd"
                              d="M7.502 6h7.128A3.375 3.375 0 0 1 18 9.375v9.375a3 3 0 0 0 3-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 0 0-.673-.05A3 3 0 0 0 15 1.5h-1.5a3 3 0 0 0-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6ZM13.5 3A1.5 1.5 0 0 0 12 4.5h4.5A1.5 1.5 0 0 0 15 3h-1.5Z"
                              clip-rule="evenodd"/>
                        <path fill-rule="evenodd"
                              d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V9.375ZM6 12a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V12Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 15a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V15Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 18a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V18Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75Z"
                              clip-rule="evenodd"/>
                      </svg>

                    </span>
                    <p>Study Guide
                    </p>
                </a>
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
            </div>
        </section>
        <!-- quiz section end from here -->
    </main>
@endsection

@section('scripts')
    <script>
        $('document').ready(function (e) {
            $('body').on('click', '.submitButton', function (e) {
                e.preventDefault();
                $('#quiz_form').submit();
            })


        })
    </script>
@endsection
