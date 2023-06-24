<?php
 /* php artisan serve  */
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', 'App\Http\Controllers\about@index');

Route::get('/blogs', 'App\Http\Controllers\blogs@index');

/* localhost:8000/blog/4 */
Route::get('/blogs/{id}', 'App\Http\Controllers\blogs@show');

Route::get('/contact', 'App\Http\Controllers\contact@index');

Route::post('/contact', 'App\Http\Controllers\contact@store');


