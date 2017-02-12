@extends('layouts.app')

@section('content')
    <div class="section">
        <div class="container">
            <div class="title">My open tickets</div>
            <div class="columns">
                <div class="column ">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Ticket number</th>
                        </tr>
                        </thead>
                        @foreach($tickets as $ticket)
                            <tr>
                                <td>
                                    {{$ticket->ticket_number}}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection