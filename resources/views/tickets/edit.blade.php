@extends('layouts.app')

@section('content')
    <div class="section">
        <form action="/tickets/update/{{$ticket->id}}" method="POST">
        <div class="container">
            <div class="columns">
                <div class="column is-4">
                    <p class="title">Edit ticket {{$ticket->ticket_number}}</p>

                </div>
                <div class="column">
                    <button class="button is-primary" type="submit">
                                    <span class="icon">
                                        <i class="fa fa-save"></i>
                                    </span>
                        <span>Save</span>
                    </button>
                    <a href="{{action('TicketController@show', ['id' => $ticket->id])}}" class="button is-danger">
                                    <span class="icon">
                                        <i class="fa fa-times"></i>
                                    </span>
                        <span>Cancel</span>
                    </a>
                </div>
            </div>
            <div class="columns">
                <div class="column">

                    <input name="_method" type="hidden" value="PATCH">
                        {{csrf_field()}}
                    <div class="tile is-ancestor">
                        <div class="tile is-4 is-parent">
                            <div class="tile is-child box">
                                <p class="control">
                                    <label class="label">Title</label>
                                    <input type="text" name="title" class="input" value="{{$ticket->title}}">
                                </p>
                                <p class="control">
                                    <label class="label">Contact name</label>
                                    <input type="text" name="contact_name" value="{{$ticket->contact_name}}" class="input">
                                </p>
                                <p class="control">
                                    <label class="label">Contact telephone</label>
                                    <input type="text" name="contact_tel_nr" value="{{$ticket->contact_tel_nr}}" class="input">
                                </p>
                                <p class="control">
                                   <label class="label">Assigned to</label>
                                    <span class="select">
                                        <select name="rep_id" id="">
                                            @if($ticket->rep)
                                                <option value="{{$ticket->rep_id}}">{{$ticket->rep->FullName}}</option>
                                            @else
                                                <option value="">Choose rep</option>
                                            @endif

                                            @foreach($reps as $rep)
                                                <option value="{{$rep->id}}">{{$rep->FullName}}</option>
                                            @endforeach
                                        </select>
                                        
                                    </span>
                                        
                                </p>
                                <p class="control">
                                    <label class="label">Status</label>
                                    <span class="select">
                                        <select name="state_id" id="">
                                            @if($ticket->state_id)
                                                <option value="{{$ticket->state_id}}">{{$ticket->state->name}}</option>
                                            @endif
                                            @foreach($statusses as $status)
                                                <option value="{{$status->id}}">{{$status->name}}</option>
                                            @endforeach
                                        </select>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="tile is-parent">
                            <div class="tile is-child box">
                                <p class="control">
                                    <label for="" class="label">Description</label>
                                    <textarea name="description" id="description" cols="30" rows="10" class="textarea">{{$ticket->description}}</textarea>
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        </form>
    </div>
    <script>tinymce.init({
        selector:'#description',
        height: '300'
        })
    </script>
@endsection