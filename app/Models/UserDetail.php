<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class UserDetail extends Model
{
    protected $guarded = [];

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getTicketDuedateAttribute() {
        return Carbon::parse($this->attributes['ticket_duedate'])->format('Y-m-d');
    }

    public function getDobAttribute() {
        return Carbon::parse($this->attributes['dob'])->format('Y-m-d');
    }
}
