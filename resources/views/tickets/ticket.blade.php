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
                                @foreach($logs as $log)

                                <div class="card" style="margin-top: 15px">
                                    <header class="card-header">
                                        <p class="card-header-title">
                                        <?php
                                            $dt = \Carbon\Carbon::parse($log->created_at);
                                                echo $dt->format('d-m-Y H:i:s');
                                            ?>
                                        </p>
                                    </header>

                                    <div class="card-content">
                                        <div class="content">
                                            {!! $log->text !!}
                                        </div>
                                    </div>
                                    <footer class="card-footer">
                                        <form action="/log/{{$log->id}}" method="POST">
                                        <input name="_method" type="hidden" value="DELETE">
                                        {{csrf_field()}}
                                        <button id="delete-btn" type="submit" class="card-footer-item">Delete</button>
                                        <a href="#" class="card-footer-item"></a>
                                        </form>
                                    </footer>
                                </div>

                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tile is-ancestor">
                        <div class="tile is-parent is-8">
                            <div class="tile is-child box"></div>
                        </div>
                        <div class="tile is-parent">
                            <div class="tile is-child box"></div>
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

        $('#delete-btn').on('click', function(e) {
            confirm('Berry is mijn beste vriend.');
        });




    </script>
@endsection