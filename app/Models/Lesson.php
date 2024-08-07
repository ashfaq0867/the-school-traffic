<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Lesson extends Model
{
    public function section()
    {
        return $this->belongsTo(CoursePart::class, 'part_id');
    }


}
