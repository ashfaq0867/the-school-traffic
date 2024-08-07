<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    protected $table = 'orders';
    protected $guarded = [];
    public $additional_attributes = ['price'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function addons(){
        return $this->belongsToMany(CourseAddon::class, 'order_addon', 'order_id', 'course_addon_id');
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function getPriceAttribute()
    {
        return "$".number_format($this->attributes['price'], 2);
    }
}
