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
        $chartDataTicketStatus[] = Ticket::where('state_id', '=', 1)->count();
        $chartDataTicketStatus[] = Ticket::where('state_id', '=', 2)->count();
        $chartDataTicketStatus[] = Ticket::where('state_id', '=', 3)->count();

        return view('home', compact('chartDataOpenTickets', 'chartDataTicketStatus'));
    }
}
