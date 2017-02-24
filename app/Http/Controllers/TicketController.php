<?php

namespace App\Http\Controllers;

use App\Log;
use App\State;
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
        $logs = Log::where('ticket_id', $ticket->id)->get();
        return view('tickets.ticket', compact('ticket', 'logs'));
    }

    public function edit($id)
    {
        $ticket = Ticket::find($id);
        // If rep is not set, return all reps (users)
        if($ticket->rep_id != null) {
            $reps = User::whereNotIn('id', [$ticket->rep_id])->get();
        } else {
            $reps = User::all();
        }
        $statusses = State::where('id', '<>', $ticket->state_id)->get();

        return view('tickets.edit', compact('ticket', 'reps', 'statusses'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'contact_name' => 'required|min:5',
            'contact_tel_nr' => 'required|min:5'
        ]);

        $ticket = new Ticket($request->all());
        $ticket->ticket_number = $this->getNewTicketNumber();
        $ticket->state_id = 1;
        $ticket->save();

        return back()->with('succes', 'Ticket '. $ticket->ticket_number.' created!')->with('ticket_id', $ticket->id);
    }

    public function update(Request $request, $id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->fill($request->all());
        $ticket->save();

        return redirect('/tickets/'.$ticket->id)->with(['success' => 'Ticket updated and saved!']);
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
