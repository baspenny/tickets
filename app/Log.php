<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'ticket_id',
        'user_id',
        'text'
    ];

    public function ticket()
    {
        return $this->belongsTo('App\Ticket', 'id', 'ticket_id');
    }

    public function user()
    {
        return $this->hasOne('App\User', 'id','user_id' );
    }

}
