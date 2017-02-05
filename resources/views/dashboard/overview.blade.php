@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1 class="title">Welcome --user--</h1>
        <h2 class="subtitle">This is your startpoint</h2>
        <div class="content">
            @if(count($allOpenTickets) == 1)
                <p>There is {{count($allOpenTickets)}} ticket open from a total
                    of {{count($allTickets)}} tickets in this system.</p>
            @else
                <p>There are {{count($allOpenTickets)}} tickets open from a total
                    of {{count($allTickets)}} tickets in this system.</p>
            @endif
            <p>There are --open tickets assigned to me--</p>
        </div>
    </div>
@endsection