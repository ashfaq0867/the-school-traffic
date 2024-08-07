<?php

    namespace App\Actions;

    use TCG\Voyager\Actions\AbstractAction;
    use Illuminate\Support\Facades\Route;


    class AddButton extends AbstractAction
    {
        public function getTitle()
        {
            if ($this->dataType->slug == 'courses'){
                return 'Add Course Part';
            }

            if ($this->dataType->slug == 'course-parts'){
                return 'Add Lesson';
            }

            if ($this->dataType->slug == 'parts-questions'){
                return 'Add Options';
            }
        }

        public function getIcon()
        {
            return 'voyager-list-add';
        }

        public function shouldActionDisplayOnDataType()
        {

            if ($this->dataType->slug == 'courses') {
                return true;
            }

            if ($this->dataType->slug == 'course-parts'){
                return true;
            }

            if ($this->dataType->slug == 'parts-questions'){
                return true;
            }

        }


        public function getAttributes()
        {
            return [
                'class' => 'btn btn-sm btn-success pull-right mr-5',
            ];
        }

        public function getDefaultRoute()
        {
            if ($this->dataType->slug == 'courses') {
                return route('voyager.course-parts.create', ['id' => $this->data->id]);
            }

            if ($this->dataType->slug == 'course-parts') {
                return route('voyager.lessons.create', ['id' => $this->data->id]);
            }

            if ($this->dataType->slug == 'parts-questions') {
                return route('voyager.parts-options.create', ['id' => $this->data->id]);
            }
        }


    }
