<?php

    namespace App\Http\Controllers;

    use App\Models\CoursePart;
    use App\Models\Lesson;
    use App\Models\UserRead;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class PageController extends Controller
    {
        public function index(Request $request)
        {


            $query = Lesson::where('part_id', $request->id)->withWhereHas('section');


            $count_total_lesson = $query->count();


            if ($count_total_lesson === 0 || $request->page > $count_total_lesson) {
                return abort(404);
            }

            $lessons = $query->paginate(1);
            $user = auth()->user();

            UserRead::firstOrCreate([
                'user_id' => $user->id,
                'part_id' => $request->id,
                'lesson_id' => $lessons->items()[0]->id,
                'read_lesson' => 1
            ]);

            $count_read_lesson = $user->readLesson()->where('user_read.part_id', $request->id)->where('read_lesson', 1)->count();
            $quiz_option = ($count_total_lesson == $count_read_lesson);

            return view('page', ['lessons' => $lessons, 'quiz_option' => $quiz_option, 'id' => $request->id]);
        }


    }
