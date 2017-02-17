@extends('layouts.app')

@section('content')
    <div class="section">
        <div class="container">
            <div class="title">All open tickets</div>
            <div class="columns">
                <div class="column">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Ticket number</th>
                        </tr>
                        </thead>
                    @foreach($tickets as $ticket)
                        <tr>
                        <td>
                            <a href="/tickets/{{$ticket->id}}">{{$ticket->ticket_number}}</a>
                        </td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection