<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class CourseAddon extends Model
{
    public $additional_attributes = ['name_price'];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }



    public function getNamePriceAttribute()
    {
        return "{$this->addon_name} ". '$' ."{$this->addon_price}";
    }


}
