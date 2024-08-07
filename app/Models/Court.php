<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Court extends Model
{
    protected $guarded = [];

    public function leacode()
    {
        return $this->hasMany(LeaCode::class, 'court_id', 'id');
    }

}
