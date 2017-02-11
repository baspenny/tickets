<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.1/css/bulma.css">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<div id="app">
    <div class="nav">
        <div class="container">
            @if (Auth::guest())
                <div class="nav-left">
                    <a class="nav-item is-tab" href="{{ route('login') }}">Login</a>
                    <a class="nav-item is-tab" href="{{ route('register') }}">Register</a>
                </div>
            @else
                <div class="nav-right">
                    <p class="nav-item">
                        {{ Auth::user()->name }}
                    </p>
                    <form action="{{route('logout')}}" method="POST">
                        <p>
                            {{csrf_field()}}
                        </p>
                        <p class="nav-item">
                            <button type="submit" class="button is-primary">Uitloggen</button>
                        </p>
                    </form>
                </div>
            @endif
        </div>
    </div>

        <div class="container">
            @yield('content')
        </div>


</div>

<!-- Scripts -->
<script src="/js/app.js"></script>
</body>
</html>
