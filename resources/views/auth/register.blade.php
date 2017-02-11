@extends('layouts.app')

@section('content')
<div class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-half is-offset-one-quarter">
                <div class="title">Register</div>
                <form role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <p class="control">
                        <label class="label" for="name">Name</label>
                        <input class="input{{ $errors->has('name') ? ' is-danger' : '' }}" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="message is-danger">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    </p>
                    <p class="control">
                    <label class="label" for="email">E-Mail Address</label>

                    <input class="input{{ $errors->has('email') ? ' is-danger' : '' }}" id="email" type="email" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="message is-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    </p>
                    <p class="control">
                        <label class="label" for="password">Password</label>

                        <input class="input{{ $errors->has('password') ? ' is-danger' : '' }}" id="password" type="password" name="password" required>
                    </p>
                    <p class="control">
                    <label class="label" for="password-confirm">Confirm Password</label>

                    <input class="input" id="password-confirm" type="password" name="password_confirmation" required>
                    @if ($errors->has('password'))
                        <span class="message is-danger">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    </p>

                    <p class="control">
                        <button type="submit" class="button is-primary">
                            Register
                        </button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
