<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Ticket extends Model
{
    protected $fillable = [
        'title',
        'description',
        'solution',
        'contact_name',
        'contact_tel_nr',
        'rep_id',
        'time_closed',
        'time_trigger'
    ];

    public function scopeAllOpenTickets($query) {
        return $query->whereTimeClosed(null);
    }


    public function scopeMyOpenTickets($query) {
        return $query->whereRepId(Auth::user()->id);
    }

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function rep()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function state()
    {
        return $this->hasOne('App\State', 'id', 'state_id');
    }
//    public function logs()
//    {
//        return $this->hasMany('App\Log',)
//    }



}
