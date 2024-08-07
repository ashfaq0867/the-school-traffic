<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Models\CoursePart;
    use Illuminate\Http\Request;
    use TCG\Voyager\Facades\Voyager;
    use TCG\Voyager\Http\Controllers\VoyagerBaseController as BaseVoyagerBaseController;

    class LessonController extends BaseVoyagerBaseController
    {

        public function create(Request $request)
        {
            if (!$request->id) {
                return abort(404);
            }

            $course_part = CoursePart::where('id', $request->id)->first();

            $slug = $this->getSlug($request);


            $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

            // Check permission
            $this->authorize('add', app($dataType->model_name));

            $dataTypeContent = (strlen($dataType->model_name) != 0)
                ? new $dataType->model_name()
                : false;

            foreach ($dataType->addRows as $key => $row) {
                $dataType->addRows[$key]['col_width'] = $row->details->width ?? 100;
            }

            // If a column has a relationship associated with it, we do not want to show that field
            $this->removeRelationshipField($dataType, 'add');

            // Check if BREAD is Translatable
            $isModelTranslatable = is_bread_translatable($dataTypeContent);

            // Eagerload Relations
            $this->eagerLoadRelations($dataTypeContent, $dataType, 'add', $isModelTranslatable);

            $view = 'voyager::bread.edit-add';

            if (view()->exists("voyager::$slug.edit-add")) {
                $view = "voyager::$slug.edit-add";
            }

            return Voyager::view($view, compact('dataType', 'dataTypeContent', 'isModelTranslatable', 'course_part'));
        }

    }
