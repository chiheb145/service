<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});



Auth::routes(
);
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard/index', function () {
        return view('dashboard.index');
    })->name('dashboard.index');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
