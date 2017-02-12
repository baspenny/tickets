<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allOpenTickets()
    {
        $tickets = Ticket::AllOpenTickets()->latest()->get();
        return view('tickets.tickets', compact('tickets'));
    }

    public function myOpenTickets()
    {
        $tickets = Ticket::MyOpenTickets()->latest()->get();
        return view('tickets.mytickets', compact('tickets'));
    }

    protected function __getNewTicketNumber()
    {
        $newTicketNumber = Ticket::max('ticket_number');
        $parts = explode('-', $newTicketNumber);
        if ($parts[1] === date('y'))
        {
            $newTicketNumber++;
            return $newTicketNumber;
        }
        else
        {
            $parts[1] = date('y') + 1;
            $parts[2] = '00001';
            $newTicketNumber = implode('-', $parts);
            return $newTicketNumber;
        }

    }
}
