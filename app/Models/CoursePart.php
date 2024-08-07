<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoursePart extends Model
{
    protected $table = 'course_parts';
     protected $guarded = [];

    public function lessons()
    {
        return $this->hasMany(Lesson::class, 'part_id');
    }

    public function quiz()
    {
        return $this->hasMany(PartsQuestion::class, 'part_id', 'id')->orderBy('type')->inRandomOrder();
    }

    public function course(){
        return $this->belongsTo(Course::class, 'course_id', 'id');

    }

    function part_read(){
        return $this->belongsToMany(User::class, 'user_read', 'part_id', 'user_id');
    }


}
