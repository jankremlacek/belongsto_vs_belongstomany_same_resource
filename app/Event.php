<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function owner()
    {
        return $this->belongsTo(User::class);
    }


    public function attendees()
    {
        return $this->belongsToMany(User::class);
    }
}
