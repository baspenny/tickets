@extends('layouts.app')

@section('content')
<div class="section">
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="title">Dashboard</div>

                <div class="content">
                    this is some intro text.. Maybe some anouncements or something...
                </div>
                <div>
                    <p class="control">
                        <a href="/tickets/create" class="button is-primary">
                            <span class="icon">
                                <i class="fa fa-plus-square"></i>
                            </span>
                            <span>New Ticket</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column is-half">
                <div class="title">
                    This is the graph
                </div>
                <canvas id="openTickets" width="100" height="100">
                </canvas>

            </div>
            <div class="column is-half">
                <div class="title">
                    This is the graph
                </div>
                <canvas id="second" width="100" height="100">
                </canvas>

            </div>
        </div>
    </div>
</div>
    <script>
        var openTickets = document.getElementById('openTickets');
        var openTickets = new Chart(openTickets, {
            type: 'bar',
            data: {
                labels: ["Mine open", "All open"],
                datasets: [{
                    label: '# of Tickets',
                    data: {{ json_encode($chartData) }},
                    backgroundColor: [
                        'rgba(0, 209, 178, 0.2)',
                        'rgba(0, 153, 130, 0.2)'
                    ],
                    borderColor: [
                        'rgba(0, 209, 178,1)',
                        'rgba(0, 153, 130, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            fixedStepSize: 1,
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>
@endsection
