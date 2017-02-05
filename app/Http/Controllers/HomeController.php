<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allTickets = Ticket::all();
        $allOpenTickets = Ticket::allOpenTickets();

        return view('dashboard.index', compact('allTickets', 'allOpenTickets'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $allTickets = Ticket::all();
        $allOpenTickets = Ticket::allOpenTickets();

        return view('dashboard.overview', compact('allTickets', 'allOpenTickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function myTickets()
    {
        $allTickets = Ticket::all();
        $allOpenTickets = Ticket::allOpenTickets();
        $myOpenTickets = Ticket::myOpenTickets();

        return view('dashboard.mytickets', compact('allTickets', 'allOpenTickets', 'myOpenTickets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
