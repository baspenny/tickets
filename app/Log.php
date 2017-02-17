<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    public function ticket()
    {
        return $this->belongsTo('App\Ticket', 'id', 'ticket_id');
    }
}
