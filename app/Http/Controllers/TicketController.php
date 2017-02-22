<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\User;
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

    public function create()
    {
        $reps = User::all();
        return view('tickets.create', compact('reps'));
    }

    public function show($id)
    {
        $ticket = Ticket::find($id);
        return view('tickets.ticket', compact('ticket'));
    }

    public function edit($id)
    {
        $ticket = Ticket::find($id);
        dd($ticket);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'description' => 'required|min:5',
            'contact_name' => 'required|min:5',
            'contact_tel_nr' => 'required|min:5'
        ]);

        $ticket = new Ticket($request->all());
        $ticket->ticket_number = $this->getNewTicketNumber();
        $ticket->state_id = 1;

        $ticket->save();
        return back()->with('succes', 'Ticket '. $ticket->ticket_number.' created!')->with('ticket_id', $ticket->id);
    }

    protected function getNewTicketNumber()
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
