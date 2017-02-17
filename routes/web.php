<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::get('/tickets/create', 'TicketController@create');
Route::get('/tickets', 'TicketController@AllOpenTickets');
Route::post('/tickets', 'TicketController@store');
Route::get('/tickets/{id}', 'TicketController@show');

Route::get('/mytickets', 'TicketController@myOpenTickets');

Route::get('/home', 'HomeController@index');
