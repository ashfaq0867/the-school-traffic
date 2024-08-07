<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class UserRead extends Model
{
    protected $table = 'user_read';
    protected $guarded = [];
    public $timestamps = false;
}
