<?php

    namespace App\Actions;

    use TCG\Voyager\Actions\AbstractAction;


    class AddQuizQuestion extends AbstractAction
    {
        public function getTitle()
        {
            if ($this->dataType->slug == 'course-parts'){
                return 'Add Quiz Question';
            }


        }

        public function getIcon()
        {
            return 'voyager-list-add';
        }

        public function shouldActionDisplayOnDataType()
        {

            if ($this->dataType->slug == 'course-parts'){
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

            if ($this->dataType->slug == 'course-parts') {
                return route('voyager.parts-questions.create', ['id' => $this->data->id]);
            }

        }


    }
