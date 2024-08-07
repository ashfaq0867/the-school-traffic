@extends('layouts.page')

@section('content')

    <main class="px-6 xl:px-64">


        <section class="top py-8">
            <div class="flex item-center justify-center space-x-4 flex-wrap md:flex-nowrap px-8 xl:px-96">

                @if(isset($percentage) && $percentage < 70)
                <a href="{{ route('page', request()->id)  }}"
                   class="flex item-center justify-center gap-2 font-bold shadow-md p-2 px-4 transition ease-in-out delay-150 duration-200  rounded-full hover:shadow-none hover:scale-110 hover:border hover:text-blue-600 hover:border-blue-600 ">
                    <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path
                            d="M7.5 3.375c0-1.036.84-1.875 1.875-1.875h.375a3.75 3.75 0 0 1 3.75 3.75v1.875C13.5 8.161 14.34 9 15.375 9h1.875A3.75 3.75 0 0 1 21 12.75v3.375C21 17.16 20.16 18 19.125 18h-9.75A1.875 1.875 0 0 1 7.5 16.125V3.375Z"/>
                        <path
                            d="M15 5.25a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963A5.23 5.23 0 0 0 17.25 7.5h-1.875A.375.375 0 0 1 15 7.125V5.25ZM4.875 6H6v10.125A3.375 3.375 0 0 0 9.375 19.5H16.5v1.125c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V7.875C3 6.839 3.84 6 4.875 6Z"/>
                      </svg>

                    </span>
                    <p>
                        ReTake
                    </p>
                </a>
                @endif

                @if($next_id > 0 && isset($percentage) && $percentage >= 70)
                <a href="{{ route('page', $next_id)  }}"
                   class="flex item-center justify-center gap-2 font-bold shadow-md p-2 px-4 transition ease-in-out delay-150 duration-200  rounded-full hover:shadow-none hover:scale-110 hover:border hover:text-blue-600 hover:border-blue-600 ">
                    <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path
                            d="M7.5 3.375c0-1.036.84-1.875 1.875-1.875h.375a3.75 3.75 0 0 1 3.75 3.75v1.875C13.5 8.161 14.34 9 15.375 9h1.875A3.75 3.75 0 0 1 21 12.75v3.375C21 17.16 20.16 18 19.125 18h-9.75A1.875 1.875 0 0 1 7.5 16.125V3.375Z"/>
                        <path
                            d="M15 5.25a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963A5.23 5.23 0 0 0 17.25 7.5h-1.875A.375.375 0 0 1 15 7.125V5.25ZM4.875 6H6v10.125A3.375 3.375 0 0 0 9.375 19.5H16.5v1.125c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V7.875C3 6.839 3.84 6 4.875 6Z"/>
                      </svg>

                    </span>
                    <p>
                        Next
                    </p>
                </a>
                @endif

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

        @if(isset($percentage) && $percentage < 70)
            <div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                    <div class="py-1">
                        <svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20">
                            <path
                                d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-bold">Regrettable Outcome</p>
                        <p>Unfortunately, you did not pass this quiz, achieving a score of {!! $percentage !!}%.</p>
                        <p>While this outcome may be disappointing, it presents an opportunity for reflection and further learning. Identify areas for improvement and consider revisiting the material to strengthen your knowledge.</p>
                    </div>
                </div>
            </div>

        @else
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md"
                 role="alert">
                <div class="flex">
                    <div class="py-1">
                        <svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20">
                            <path
                                d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-bold">Congratulations!</p>
                        <p class="text-sm">We are pleased to inform you that you have successfully passed the quiz with a score of  {!! $percentage !!}%.</p>
                    </div>
                </div>
            </div>

        @endif

        <section class="quiz_section bg-slate-200 rounded-xl py-8">
            <h1 class="text-2xl font-bold px-8 text-blue-600">{{ $data->name  }} Review Quiz.</h1>
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
                                $correctAnswerBoolean = '';
                                $wrongAnswerBoolean = '';
                            @endphp

                            @forelse($quiz->answers as $option)
                                <div class="flex items-center">
                                    {!! $letter = $letters[$counter] !!} &nbsp;
                                    <input id="{!! 'boolean_'. $option->id !!}"
                                           name="boolean_{!! $quiz->id !!}"
                                           type="radio"
                                           class="form-radio"
                                           disabled="true"
                                           value="{!! $letter . '_' . $option->id !!}"
                                           {{--										   {{ old('boolean_'.$quiz->id) == $letter . '_' . $option->id ? 'checked' : '' }}--}}
                                           {{  (isset($getIds) && $getIds[$ind]["option_id"] == $option->id) ? 'checked' : '' }}
                                           required>
                                    <label class="form-radio-label ml-3 xl:text-xl"
                                           for="{!! 'boolean_'. $option->id !!}">
                                        {!! $option->name !!}
                                    </label>
                                </div>


                                @php
                                    if (isset($getIds) && $quiz->id == $getIds[$ind]["question_id"]){
                                        if($getIds[$ind]["option_id"] == $option->id && $getIds[$ind]["result"] == 1){
                                            $correctAnswerBoolean = $letter;
                                        }else if($getIds[$ind]["option_id"] == $option->id && $getIds[$ind]["result"] == 0){
                                            $wrongAnswerBoolean = $letter;
                                        }
                                    }
                                @endphp

                                {{-- @if(isset($getIds))
                                     @if($quiz->id == $getIds[$ind]["question_id"])
                                         @if($getIds[$ind]["result"] == 1)
                                             $correctAnswer = $letter;
                                         @endif
                                         @dump($getIds[$ind]["user_id"])
                                         @dump($getIds[$ind]["part_id"])
                                         @dump($getIds[$ind]["question_id"])
                                         @dump($getIds[$ind]["option_id"])
                                         @dump($getIds[$ind]["result"])
                                     @endif
                                 @endif--}}

                                @php $counter++; @endphp
                            @empty
                                <h2 class="text-2xl font-bold my-6">No option found</h2>
                            @endforelse

                            @if(!empty($correctAnswerBoolean))
                                <p class="text-green-600 text-xl">You selected the correct
                                    answer {!! $correctAnswerBoolean !!}
                                    .</p>
                            @endif
                            @if(!empty($wrongAnswerBoolean))
                                <p class="text-red-600 text-xl">Your answer was incorrect You
                                    selected {!! $wrongAnswerBoolean !!}.</p>
                            @endif
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
                                $correctAnswerMulti = '';
                                $wrongAnswerMulti = '';
                            @endphp
                            @forelse($quiz->answers as $option)
                                <div class="flex items-center mt-2">
                                    {!! $letter = $letters[$counter] !!} &nbsp;
                                    <input id="{!! 'multiple_'. $option->id !!}"
                                           name="multiple_{!! $quiz->id !!}"
                                           type="radio"
                                           class="form-radio"
                                           disabled="true"
                                           value="{!! $letter . '_' . $option->id !!}"
                                           {{--										   {{ old('multiple_'.$quiz->id) == $letter . '_' . $option->id ? 'checked' : '' }}--}}
                                           {{  (isset($getIds) && $getIds[$ind]["option_id"] == $option->id) ? 'checked' : '' }}
                                           required>
                                    <label class="form-radio-label ml-3 xl:text-xl"
                                           for="{!! 'multiple_'. $option->id !!}">
                                        {!! $option->name !!}
                                    </label>
                                </div>

                                @php
                                    if (isset($getIds) && $quiz->id == $getIds[$ind]["question_id"]){
                                        if($getIds[$ind]["option_id"] == $option->id && $getIds[$ind]["result"] == 1){
                                            $correctAnswerMulti = $letter;
                                        }else if($getIds[$ind]["option_id"] == $option->id && $getIds[$ind]["result"] == 0){
                                            $wrongAnswerMulti = $letter;
                                        }
                                    }
                                @endphp

                                @php $counter++; @endphp
                            @empty
                                <h2 class="text-2xl font-bold my-6">No option found</h2>
                            @endforelse

                            @if(!empty($correctAnswerMulti))
                                <p class="text-green-600 text-xl">You selected the correct
                                    answer {!! $correctAnswerMulti !!}
                                    .</p>
                            @endif
                            @if(!empty($wrongAnswerMulti))
                                <p class="text-red-600 text-xl">Your answer was incorrect You
                                    selected {!! $wrongAnswerMulti !!}.</p>
                            @endif


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

                <a href="{{ route('page', request()->id)  }}"
                   class="flex item-center justify-center gap-2 font-bold shadow-md p-2 px-4 transition ease-in-out delay-150 duration-200  rounded-full hover:shadow-none hover:scale-110 hover:border hover:text-blue-600 hover:border-blue-600 ">
                    <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path
                            d="M7.5 3.375c0-1.036.84-1.875 1.875-1.875h.375a3.75 3.75 0 0 1 3.75 3.75v1.875C13.5 8.161 14.34 9 15.375 9h1.875A3.75 3.75 0 0 1 21 12.75v3.375C21 17.16 20.16 18 19.125 18h-9.75A1.875 1.875 0 0 1 7.5 16.125V3.375Z"/>
                        <path
                            d="M15 5.25a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963A5.23 5.23 0 0 0 17.25 7.5h-1.875A.375.375 0 0 1 15 7.125V5.25ZM4.875 6H6v10.125A3.375 3.375 0 0 0 9.375 19.5H16.5v1.125c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V7.875C3 6.839 3.84 6 4.875 6Z"/>
                      </svg>

                    </span>
                    <p>
                        ReTake
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
