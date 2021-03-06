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


Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::post('/tickets/{id}/logs/', 'LogController@store');
Route::patch('/tickets/update/{id}', 'TicketController@update');
Route::get('/tickets/create', 'TicketController@create');

Route::get('/tickets', 'TicketController@AllOpenTickets');
Route::post('/tickets', 'TicketController@store');
Route::get('/tickets/edit/{id}', 'TicketController@edit');
Route::get('/tickets/{id}', 'TicketController@show');
Route::get('/mytickets', 'TicketController@myOpenTickets');
Route::delete('/log/{id}', 'LogController@destroy');

