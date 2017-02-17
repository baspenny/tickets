@extends('layouts.app')

@section('content')
    <div class="section">
        <div class="container">
            <div class="title">Create ticket</div>
            @if(session('succes'))
                <div class="notification is-succes">
                    {{session('succes')}}
                </div>
            @endif
            <div class="columns">
                <div class="column is-half">
                    <form action="/tickets" method="POST">
                        {{ csrf_field() }}
                        <label class="label">Title</label>
                        <p class="control">
                            <input type="text" placeholder="Ticket title" class="input" name="title">
                        </p>
                        <label class="label">Description</label>
                        <p class="control">
                            <textarea placeholder="Description" class="textarea" name="description"></textarea>
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
    @endsection