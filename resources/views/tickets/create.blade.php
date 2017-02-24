@extends('layouts.app')

@section('content')
    <div class="section">
        <div class="container">

            <div class="columns">
                <div class="column is-half is-offset-one-quarter">
                    <div class="title">Create ticket</div>
                    @if(session('succes'))
                        <div class="notification is-success">
                            <a style="color:white" href="/tickets/{{session('ticket_id')}}">
                                {{session('succes')}}
                            </a>
                        </div>
                    @endif
                    <form action="/tickets" method="POST">
                        {{ csrf_field() }}
                        <label class="label">Title</label>
                        <p class="control">
                            @if($errors->has('title'))
                                <input type="text" placeholder="Please provide a title" class="input is-danger" name="title" value="{{old('title')}}">
                                <div class="notification is-warning">{{$errors->first('title')}}</div>
                            @else
                                <input type="text" class="input" name="title" title="title" value="{{old('title')}}">
                            @endif
                        </p>
                        <label class="label">Description</label>
                        <p class="control">

                            <textarea title="description" id="description" class="textarea" name="description">{{old('description')}}</textarea>

                        </p>
                        <label class="label">Contact Name</label>
                        <p class="control">
                            @if($errors->has('contact_name'))
                                <input placeholder="Please enter contact name" type="text" class="input is-danger" name="contact_name" value="{{old('contact_name')}}">
                                <div class="notification is-warning">{{$errors->first('contact_name')}}</div>
                            @else
                                <input type="text" class="input" name="contact_name" value="{{old('contact_name')}}">
                            @endif
                        </p>
                        <label class="label">Contact Phone Number</label>
                        <p class="control">
                            @if($errors->has('contact_tel_nr'))
                                <input placeholder="Please provide telephone number" type="text" class="input is-danger" name="contact_tel_nr" value="{{old('contact_tel_nr')}}">
                                <div class="notification is-warning">{{$errors->first('contact_tel_nr')}}</div>
                            @else
                                <input type="text" class="input" name="contact_tel_nr">
                            @endif
                        </p>
                        <p class="control">
                            <label class="label">Select the handler (optional)</label>
                            <span class="select">
                                <select name="rep_id">
                                    <option value="">Select</option>
                                    @foreach($reps as $rep)
                                        <option value="{{$rep->id}}">{{$rep->FullName}}</option>
                                    @endforeach
                                </select>
                            </span>
                            
                        </p>
                        <p class="control">
                            <button class="button is-primary">
                            <span class="icon">
                                <i class="fa fa-plus-square"></i>
                            </span>
                                <span>Create Ticket</span>
                            </button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>tinymce.init({ selector:'#description' });</script>
    @endsection