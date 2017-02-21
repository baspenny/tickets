@extends('layouts.app')

@section('content')
    <div class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <a href="/tickets/edit/{{$ticket->id}}"><button class="button is-primary">Edit Ticket</button></a>
                </div>
            </div>
            <div class="columns">
                <div class="column">

                    <div class="tile is-ancestor">
                        <div class="tile is-4 is-parent">
                            <div class="tile is-child box">
                            <table class="table">
                                <div class="title">Details</div>
                                <tbody>
                                    <tr>
                                        <td>Ticket No:</td>
                                        <td>{{$ticket->ticket_number}}</td>
                                    </tr>
                                    <tr>
                                        <td>Caller:</td>
                                        @if($ticket->user)
                                            <td>{{$ticket->user->FullName}}</td>
                                        @else
                                            <td>N/A</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td>Telephone No:</td>
                                        @if($ticket->user)
                                            <td>{{$ticket->user->telephone_nr}}</td>
                                        @else
                                            <td>N/A</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>{{$ticket->state->name}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <div class="tile is-4 is-parent">
                            <div class="tile is-child box">
                                <div class="title">Description</div>
                                <div>
                                    <p>
                                        {!! $ticket->description !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tile is-4 is-parent">
                            <div class="tile is-child box">
                            <div class="title">Logging</div>
                                <form action="/tickets/{{$ticket->id}}/logs" method="POST">
                                    {{csrf_field()}}
                                    <p class="control">
                                        <textarea id="henk" name="sjaak"></textarea>
                                    </p>
                                    <p class="control">
                                    <button class="button is-primary" type="submit">
                                        Save
                                    </button>
                                    </p>
                                </form>
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
    <script>tinymce.init({ selector:'#henk' });</script>
@endsection