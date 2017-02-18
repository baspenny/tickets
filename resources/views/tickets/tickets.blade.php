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
                            <th>Title</th>
                            <th>Description</th>
                            <th>Rep
                            </th>
                        </tr>
                        </thead>
                    @foreach($tickets as $ticket)
                        <tr>
                            <td>
                                <a href="/tickets/{{$ticket->id}}">{{$ticket->ticket_number}}</a>
                            </td>
                            <td>
                                {{$ticket->title}}
                            </td>
                            <td>
                                {{strlen($ticket->description) > 60 ? substr($ticket->description, 0 , 60) . '...' : $ticket->description}}
                            </td>
                            <td>
                                {{$ticket->rep->FullName}}
                            </td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection