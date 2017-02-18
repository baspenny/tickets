<p align="center">
<img src="https://cloud.githubusercontent.com/assets/19352920/23092418/87a191c4-f5ca-11e6-8e69-c8ba42d68d99.png"
</p>

## TickMan Trouble ticket manager

Welcome to the TickMan application. In the past I worked as a support engineer and worked with Remedy. It was a very elaborate tool but there were some features that I found very powerfull. Im the search of a open source tool I came out very dissapointed. No open source tool could do the things I thought needed to properly manage incidents. So now you know... Why I did it.
 
####Some key features:

- Create tickets (off course)
- Assign tickets to reps
- Keep track off the progress made in a tickets via logs
- Work your way through the tickets, event driven via trigger times

## What it uses
- [Laravel 5.4 - The framework voor web artisans](https://laravel.com)
- [Bulma CSS Framework](http://bulma.io)
- [Chart.js - Simple yet flexible JavaScript charting for designers & developers](http://www.chartjs.org)

## How to begin using it
Clone this repository to the server running php and sql of your likings.
CD into the cloned directory and run

`composer install`

After doing that run

`cp .env.example .env`

Modify your enviroment file as needed.
Then run 

`php artisan key generate` 

to generate new app key.

After that run the migrations and seeders

`php artisan migrate && php artisan db:seed`

That's it!

## Contributing
Just make a pull request

## License

TicketMan is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
<p align="center"><img src="https://cloud.githubusercontent.com/assets/19352920/23092417/84d69192-f5ca-11e6-8a1e-5254833de60d.png"></p>
