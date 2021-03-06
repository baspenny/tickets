@extends('layouts.app')

@section('content')
<div class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-one-third">
                <div class="title">Dashboard</div>
                <div class="content">
                    this is some intro text.. Maybe some anouncements or something...
                    <p class="nav-item">
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
            <div class="column is-one-third">
                <div class="title">
                    Open ticket stats
                </div>
                <canvas id="openTickets" width="100" height="100">
                </canvas>

            </div>
            <div class="column is-one-third">
                <div class="title">
                    Overview per status
                </div>
                <canvas id="second" width="100" height="100">
                </canvas>

            </div>
        </div>
    </div>
</div>
    <script>
        var element = document.getElementById('openTickets');
        var openTickets = new Chart(element, {
            type: 'bar',
            data: {
                labels: ["Mine open", "All open"],
                datasets: [{
                    label: '# of Tickets',
                    data: {{ json_encode($chartDataOpenTickets) }},
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


        var secondElement = document.getElementById('second');
        var second = new Chart(secondElement, {
                type: 'pie',
                data: {
                    labels: ['New', 'Assigned', 'In progress', 'On hold', 'Closed'],
                    datasets: [{
                        label: 'Ticket statussus',
                        data: {{json_encode($chartDataTicketStatus['data'])}},
                        backgroundColor: [
                            'rgba(0, 209, 178, 0.2)',
                            'rgba(0, 153, 130, 0.2)',
                            'rgba(0, 165, 49, 0.2)',
                            'rgba(0, 112, 49, 0.2)',
                            'rgba(0, 156, 49, 0.2)'
                        ],
                        borderColor: [
                            'rgba(0, 209, 178, 1)',
                            'rgba(0, 153, 130, 1)',
                            'rgba(0, 165, 49, 1)',
                            'rgba(0, 112, 49, 1)',
                            'rgba(0, 156, 49, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
            options: {

            }
        });
    </script>
@endsection
