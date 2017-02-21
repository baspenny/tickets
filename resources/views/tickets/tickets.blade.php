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
                            <th>State</th>
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
                                {{$ticket->state->name}}
                            </td>
                            <td>
                                @if($ticket->rep)
                                    {{$ticket->rep->FullName}}
                                @else
                                    N/A
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection