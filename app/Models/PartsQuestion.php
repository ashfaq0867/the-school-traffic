<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class PartsQuestion extends Model
{
    public function answers()
    {
        return $this->hasMany(PartsOption::class, 'question_id', 'id');
    }

}
