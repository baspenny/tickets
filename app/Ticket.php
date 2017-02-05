<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'state',
        'title',
        'ticket_number',
        'description',
        'contact_name',
        'contact_tel_number',
        'user_id',
        'rep_id',
        'state_id',
        'time_closed',
        'time_trigger'
    ];

    public function latestLogs()
    {
        return $this->hasMany('App\Log')->latest('created_at');
    }

    public function scopeAllOpenTickets($query)
    {
        return $query->whereTimeClosed('0000-00-00 00:00:00');
    }

    public function scopeMyOpenTickets($query)
    {
        return $query->whereRepId(Auth::user()->id);
    }

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'rep_id');
    }

    public function state()
    {
        return $this->hasOne('App\State', 'id', 'state_id');
    }

    public function setTicketNumberAttribute($ticketNumber)
    {
        $this->attributes['ticket_number'] = $ticketNumber;
    }

    public function getTimeTriggerAttribute($timeTrigger)
    {
        return "koetje beh" . $timeTrigger;
    }
}
