<html>
<head>
    <title>Tickets</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.1/css/bulma.css">
</head>
<body>
<nav class="nav has-shadow">
    <div class="container">
        <div class="nav-left">
            <a href="/" class="nav-item is-tab">Dashboard</a>
            <a href="/mytickets" class="nav-item is-tab">My open tickets</a>
            <a href="/index" class="nav-item is-tab">All open tickets</a>
            <a href="#" class="nav-item is-tab">My profilew</a>
        </div>
    </div>
</nav>

<section class="section">
    @yield('content')
</section>

</body>
</html>