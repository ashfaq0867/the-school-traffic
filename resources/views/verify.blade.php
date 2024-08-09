@extends('layouts.page')

@section('content')
    <main class="w-full min-h-auto flex items-center justify-center flex-col">
        <div class="form_container px-8 md:w-2/3 h-full mx-auto">
            <div class="bg-slate-100 flex items-start flex-col my-8 rounded min-h-auto pb-4 lg:pb-24">
                <h2 class="bg-blue-600 text-white text-2xl rounded font-bold w-full px-4 md:px-16 py-4 text-center">Identity Verification Question (Required by the DMV)</h2>
                <p class="py-8 px-8 xl:px-36">As an added security measure, questions will be asked at various points throughout the course to help verify that you are taking the course yourself. All traffic school providers are required by the CA DMV to ask verification questions.</p>
                <p class="px-8 xl:px-36">Please answer the following identity verification question in order to continue.</p>
                <form class="w-full mx-auto mt-6 max-w-2xl bg-white rounded-lg shadow-md p-8" method="post">
                    @csrf

                    <div class="mb-4 py-4" id="questionContainer">
                        <h3 class="text-3xl font-bold text-blue-600 py-6" id="verificationQuestion"></h3>
                        <div id="monthContainer" class="hidden">
                            <label class="block text-gray-700 font-bold mb-2" for="birthMonth">Select your month of birth:</label>
                            <select class="appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="birth-month" id="birthMonth">
                                <option value="">Month</option>
                                @foreach(range(1, 12) as $month)
                                    <option value="{{ $month }}">{{ date('F', mktime(0, 0, 0, $month, 1)) }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div id="yearContainer" class="hidden">
                            <label class="block text-gray-700 font-bold mb-2" for="birthYear">Select your year of birth:</label>
                            <select class="appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="birth-year" id="birthYear">
                                <option value="">Year</option>
                                @php
                                    $currentYear = date('Y');
                                    $startYear = $currentYear - 16;
                                    $endYear = $currentYear - 70;
                                @endphp
                                @for($year = $startYear; $year >= $endYear; $year--)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                @endfor
                            </select>
                        </div>

                        <div id="dayContainer" class="hidden">
                            <label class="block text-gray-700 font-bold mb-2" for="birthDay">Select your day of birth:</label>
                            <select class="appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="birth-day" id="birthDay">
                                <option value="">Day</option>
                                @foreach(range(1, 31) as $day)
                                    <option value="{{ $day }}">{{ $day }}</option>
                                @endforeach
                            </select>
                        </div>

                        <p class="text-red-600 pt-3 error-message"></p>
                    </div>

                    <button class="text-center bg-blue-600 py-3 text-white font-bold w-full rounded hover:bg-blue-700 hidden" id="continueButton" type="submit">Continue</button>
                </form>

            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            const questions = [
                { text: 'What month were you born?', id: 'monthContainer', key: 'month' },
                { text: 'What year were you born?', id: 'yearContainer', key: 'year' },
                { text: 'What day of the month were you born?', id: 'dayContainer', key: 'day' }
            ];

            function setRandomQuestion() {
                const question = questions[Math.floor(Math.random() * questions.length)];
                $('#verificationQuestion').text(`Question: ${question.text}`);

                // Hide all containers
                $('#monthContainer').addClass('hidden');
                $('#yearContainer').addClass('hidden');
                $('#dayContainer').addClass('hidden');
                $('#continueButton').addClass('hidden'); // Hide continue button initially

                // Show the relevant container
                $(`#${question.id}`).removeClass('hidden');
                $('#continueButton').removeClass('hidden'); // Show continue button

                // Store the key for later use
                $('#questionContainer').data('question-key', question.key);
            }

            // Initialize with a random question
            setRandomQuestion();

            $('form').on('submit', function (e) {
                e.preventDefault();
                let questionKey = $('#questionContainer').data('question-key');
                let formData = {
                    'question_key': questionKey
                };

                if (questionKey === 'month') {
                    formData['month'] = $('#birthMonth').val();
                } else if (questionKey === 'year') {
                    formData['year'] = $('#birthYear').val();
                } else if (questionKey === 'day') {
                    formData['day'] = $('#birthDay').val();
                }

                $.ajax({
                    type: "post",
                    url: "{!! route('verify', ['id' => request()->id]) !!}",
                    data: formData,
                    dataType: "json",
                    beforeSend: function (xhr) {
                        xhr.setRequestHeader("Accept", "application/json");
                        xhr.setRequestHeader("X-CSRF-TOKEN", $('meta[name="csrf-token"]').attr("content"));
                    },
                    success: function (response) {
                        if (response.success) {
                            window.location.href = response.message;
                        } else {
                            $('.error-message').html(response.message);
                        }
                    }
                });
            });
        });
    </script>
@endsection
