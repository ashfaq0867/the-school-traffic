<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class State extends Model
{
    public function courses(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Course::class,'state_id');
    }

    public function county()
    {
        return $this->hasMany(County::class, 'state_id', 'id');
    }
}
