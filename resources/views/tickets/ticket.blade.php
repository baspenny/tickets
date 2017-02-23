@extends('layouts.app')

@section('content')
    <div class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <a href="/tickets/edit/{{$ticket->id}}">
                        <button class="button is-primary">
                            <span class="icon">
                            <i class="fa fa-pencil"></i>
                            </span>
                            <span>
                                Edit Ticket
                            </span>
                        </button>
                    </a>
                </div>
            </div>
            @if(session('success'))
            <div class="columns" id="success-message">
                <div class="column">
                    <div class="notification is-success">
                        <button class="delete" id="remove-me"></button>
                        {{session('success')}}
                    </div>
                </div>
            </div>
            @endif
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
                                        @if($ticket->contact_name)
                                            <td>{{$ticket->contact_name}}</td>
                                        @else
                                            <td>N/A</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td>Telephone No:</td>
                                        @if($ticket->contact_tel_nr)
                                            <td>{{$ticket->contact_tel_nr}}</td>
                                        @else
                                            <td>N/A</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td>Handler:</td>
                                        @if($ticket->rep)
                                            <td>{{$ticket->rep->FullName}}</td>
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
                                        <textarea id="logging-text" name="text"></textarea>
                                    </p>
                                    <p class="control">
                                    <button class="button is-primary" type="submit">
                                        Save
                                    </button>
                                    </p>
                                </form>
                            <table class="table ">
                                <tbody>
                                @foreach($logs as $log)
                                <tr>
                                    <td>Created by:</td>
                                    <td>{{$log->user->FullName}}</td>
                                </tr>
                                <tr>
                                    <td>Text:</td>
                                    <td>{!!$log->text!!}</td>
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
    <script>
        tinymce.init({ selector:'#logging-text' });

        $('#remove-me').on('click', function () {
            $('#success-message').remove();
        })



    </script>
@endsection