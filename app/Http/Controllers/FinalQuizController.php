<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Course;
use App\Models\UserQuizAnswer;
use Illuminate\Http\Request;

class FinalQuizController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->id;

        $course = Course::where('id', $id)->with(['quiz']);

        if (!$course->exists()) {
            return abort(404);
        }

        $data = $course->first();

        return view('finalQuiz.index', compact('data'));
    }

    public function quizSubmit(Request $request)
    {
        $id = $request->id;
        $user = auth()->user();

        if($user->details->final_attempt == 2){
            return redirect()->route('final.quiz', ['id' => $id])->with('error', 'You have already taken the quiz');
        }

        $course = Course::where('id', $id)->with(['quiz']);

        if (!$course->exists()) {
            return abort(404);
        }

        $data = $course->first();

        $validation = [];
        foreach ($data->quiz ?? [] as $quiz) {
            $validation[$quiz->type . '_' . $quiz->id] = 'required';
        }

        $validated = $request->validate($validation);


        $getIds = [];
        $result = [];
        $correctCount = 0;
        $totalCount = 0;

        foreach ($validated as $index => $item) {

            $setIds = [
                'user_id' => $user->id,
                'quiz_id' => explode('_', $index)[1],
                'course_id' => $id,
                'answer_id' => explode('_', $item)[1]
            ];

            $answer = Quiz::where('id', $setIds['quiz_id'])->first()->answer;

            // dump($answer);

            $result['result'] = 0;

            if ($setIds['answer_id'] == $answer) {
                $result['result'] = 1;
                $correctCount++;
            }

            $addArray = array_merge($setIds, $result);

            UserQuizAnswer::updateOrCreate($setIds, $addArray);

            $totalCount++;
            $getIds[] = $addArray;
        }

        $percentage = (int)round(($correctCount * 100) / $totalCount, 0);

        $user->details->final_attempt += 1 ;
        $user->details->save();

        // dd($user->details);


        return view('finalQuiz.result', compact('data', 'getIds', 'percentage'));
    }
}
