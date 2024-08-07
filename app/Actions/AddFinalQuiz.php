<?php
    namespace App\Actions;

    use TCG\Voyager\Actions\AbstractAction;

    class AddFinalQuiz extends AbstractAction
    {
        public function getTitle()
        {
            if ($this->dataType->slug == 'courses'){
                return 'Add Final Quiz Question';
            }

            if ($this->dataType->slug == 'quizzes'){
                return 'Add Quiz Answer';
            }
        }

        public function getIcon()
        {
            return 'voyager-list-add';
        }

        public function shouldActionDisplayOnDataType()
        {
            if ($this->dataType->slug == 'courses'){
                return true;
            }

            if ($this->dataType->slug == 'quizzes'){
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
                return route('voyager.quizzes.create', ['id' => $this->data->id]);
            }


            if ($this->dataType->slug == 'quizzes'){
                return route('voyager.answers.create', ['id' => $this->data->id]);
            }
        }

    }
