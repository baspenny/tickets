@extends('layouts.app')

@section('content')
<div class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-half is-offset-one-quarter">
                <div class="title">Login</div>
                <form role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                        <label class="label" for="email">E-Mail Address</label>

                        <p class="control">
                            <input id="email" class="input {{ $errors->has('email') ? ' is-danger' : '' }}" type="email" name="email" value="{{ old('email') }}" required autofocus>
                        </p>

                        <label class="label" for="password">Password</label>
                        <p class="control">
                            <input id="password" class="input{{ $errors->has('email') ? ' is-danger' : '' }}"  type="password" name="password" required>
                        </p>
                        @if ($errors->has('email'))
                            <div class="message is-danger">
                                <strong class="message-header">{{ $errors->first('email') }}</strong>
                            </div>
                        @endif
                    <p class="control">

                        <label class="checkbox">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>

                    </p>
                    <div class="control">
                        <p class="control">
                            <button type="submit" class="button is-primary">
                                Login
                            </button>
                        </p>
                        <p class="control">
                            <a href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
