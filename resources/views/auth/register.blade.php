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
                        <label class="label" for="first_name">First name</label>
                        <input class="input{{ $errors->has('first_name') ? ' is-danger' : '' }}" id="first_name" type="text" name="first_name" value="{{ old('first_name') }}" required autofocus>

                    @if ($errors->has('first_name'))
                        <span class="message is-danger">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                    @endif
                    </p>
                    <p class="control">
                        <label class="label" for="infix">Infix</label>
                        <input class="input{{ $errors->has('infix') ? ' is-danger' : '' }}" id="infix" type="text" name="infix" value="{{ old('infix') }}">

                    </p>
                    <p class="control">
                        <label class="label" for="last_name">First name</label>
                        <input class="input{{ $errors->has('last_name') ? ' is-danger' : '' }}" id="last_name" type="text" name="last_name" value="{{ old('last_name') }}" required autofocus>

                        @if ($errors->has('last_name'))
                            <span class="message is-danger">
                            <strong>{{ $errors->first('last_name') }}</strong>
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
