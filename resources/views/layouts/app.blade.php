<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tickets') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.1/css/bulma.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <!-- Scripts -->
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="{{asset('/js/tinymce/tinymce.min.js')}}"></script>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<div id="app">
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <p class="title">
                    <span  style="font-family: 'Pacifico', cursive; font-size: 50px;">TickMan</span>
                </p>
                <p class="subtitle">Everything you need to make them tick!!!</p>
            </div>
        </div>
    </section>
    <div class="nav">

            @if (Auth::guest())
                <div class="nav-left">
                    <a class="nav-item is-tab" href="{{ route('login') }}">Login</a>
                    <a class="nav-item is-tab" href="{{ route('register') }}">Register</a>
                </div>
            @else
                <div class="nav-left nav-menu">
                    <a class="nav-item is-tab" href="/home">Dashboard</a>
                    <a class="nav-item is-tab" href="/mytickets">My tickets</a>
                    <a class="nav-item is-tab" href="/tickets">All open tickets</a>
                </div>

                <div class="nav-right">
                    <p class="nav-item">
                        {{ Auth::user()->first_name }} {{Auth::user()->infix }} {{Auth::user()->last_name }}
                    </p>
                    <form action="{{route('logout')}}" method="POST">
                        <p>
                            {{csrf_field()}}
                        </p>
                        <p class="nav-item">
                            <button type="submit" class="button is-primary">
                                <span class="icon">
                                    <i class="fa fa-sign-out"></i>
                                </span>
                                <span>Logout</span>
                            </button>
                        </p>
                    </form>
                </div>
            @endif

    </div>

        <div class="container">
            @yield('content')
        </div>


</div>

<!-- Scripts -->
{{--<script src="/js/app.js"></script>--}}

</body>
</html>
