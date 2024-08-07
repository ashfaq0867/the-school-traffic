<?php


    namespace App\Http\Controllers;

    use App\Models\CoursePart;
    use App\Models\PartsQuestion;
    use App\Models\UsersAnswer;
    use App\Models\UserRead;
    use Illuminate\Http\Request;

    class QuizController extends Controller
    {
        public function index(Request $request)
        {
            $id = $request->id;

            $coursePart = CoursePart::where('id', $id)->with(['quiz']);

            if (!$coursePart->exists()) {
                return abort(404);
            }

            $data = $coursePart->first();


            return view('quiz.index', compact('data'));
        }

        public function quizSubmit(Request $request)
        {
//            $id = $request->id;
//            $data = CoursePart::where('id', $id)->with(['quiz'])->first();

            $id = $request->id;

            $coursePart = CoursePart::where('id', $id)->with(['quiz', 'course']);


            $next = $coursePart->first()->course()->with(['parts' => function($part) use ($id) {
                $part->where('id', '>', $id);
            }])->first();

            $next_id = 0;

            if ($next && $next->parts->isNotEmpty()) {
                $next_id = $next->parts->first()->id;
            }

            if (!$coursePart->exists()) {
                return abort(404);
            }

            $data = $coursePart->first();

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
                    'user_id' => auth()->user()->id,
                    'part_id' => $id,
                    'question_id' => explode('_', $index)[1],
                ];

                $answer = PartsQuestion::where('id', $setIds['question_id'])->first()->answer;

                $result['result'] = 0;
                $result['option_id'] = explode('_', $item)[1];

                if ($result['option_id'] == $answer) {
                    $result['result'] = 1;
                    $correctCount++;
                }

                $addArray = array_merge($setIds, $result);

                UsersAnswer::updateOrCreate($setIds, $addArray);

                $totalCount++;
                $getIds[] = $addArray;
            }

            $percentage = (int)round(( $correctCount * 100) / $totalCount, 0);

            if($percentage >= 70){
                UserRead::where('user_id', auth()->user()->id)
                ->where('part_id', $id)
                ->update(['read_part' => 1]);
            }


            return view('quiz.result', compact('data', 'getIds', 'percentage', 'next_id'));
        }
    }
