<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chartDataOpenTickets = [];
        $chartDataOpenTickets[] = Ticket::MyOpenTickets()->count();
        $chartDataOpenTickets[] = Ticket::AllOpenTickets()->count();

        $chartDataTicketStatus = [];
        $chartDataTicketStatus['data'][] = Ticket::where('state_id', '=', 1)->count();
        $chartDataTicketStatus['data'][] = Ticket::where('state_id', '=', 2)->count();
        $chartDataTicketStatus['data'][] = Ticket::where('state_id', '=', 3)->count();
        $chartDataTicketStatus['data'][] = Ticket::where('state_id', '=', 4)->count();
        $chartDataTicketStatus['data'][] = Ticket::where('state_id', '=', 5)->count();
        $chartDataTicketStatus['labels'] = "New, Assigned, In progress, On hold, Closed";

        return view('home', compact('chartDataOpenTickets', 'chartDataTicketStatus'));
    }
}
