@extends('layouts.app')

@section('content')
    <div class="section">
        <div class="container">

            <div class="columns">
                <div class="column">
                    <div class="title">Ticket details</div>
                    <div class="tile is-ancestor">
                        <div class="tile is-4 is-parent">
                            <div class="tile is-child box">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Ticket No:</td>
                                        <td>{{$ticket->ticket_number}}</td>
                                    </tr>
                                    <tr>
                                        <td>Caller:</td>
                                        <td>{{$ticket->user->FullName}}</td>
                                    </tr>
                                    <tr>
                                        <td>Telephone No:</td>
                                        <td>{{$ticket->user->telephone_nr}}</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>{{$ticket->state->name}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <div class="tile is-parent">
                            <div class="tile is-child box">

                            <table class="table ">
                                <tbody>
                                @foreach($ticket->logs as $log)
                                <tr>
                                    <td>Created by:</td>
                                    <td>{{$log->user_id}}</td>
                                </tr>
                                <tr>
                                    <td>Text:</td>
                                    <td>{{$log->text}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection