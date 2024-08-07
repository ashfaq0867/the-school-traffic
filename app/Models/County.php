<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class County extends Model
{
    protected $guarded = [];

    public function courts()
    {
        return $this->hasMany(Court::class, 'county_id', 'id');
    }

}
