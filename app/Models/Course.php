<?php

namespace App\Models;

use App\Models\CoursePart;
use Illuminate\Database\Eloquent\Model;


class Course extends Model
{
    public function parts()
    {
        return $this->hasMany(CoursePart::class, 'course_id');
    }

    public function addons()
    {
        return $this->hasMany(CourseAddon::class, 'course_id', 'id');
    }

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id', 'id');
    }
    public function order()
    {
        return $this->hasOne(Order::class);
    }

    function quiz() {
        return $this->hasMany(Quiz::class, 'course_id', 'id')->orderBy('type')->inRandomOrder();
    }
}
