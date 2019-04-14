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
    return view('home');
})->name('home');

// Redirect to home if no badge ID is specified
Route::get('/badge', function () {
    return redirect()->route('home');
});

Route::resource('my-projects', 'Ngo\ProjectController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Show the badge
Route::get('/badge/{id}', 'BadgeController@showBadge');

// Redirect to home if no dashboard ID is specified
Route::get('/dashboard', function () {
    return redirect()->route('home');
});

// Show the corporate-dashboard (public)
Route::get('/dashboard/{id}', 'DashboardController@showDashboard');
