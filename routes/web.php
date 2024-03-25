<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/ad', function () {
    return view('administrador');
});

Route::get('/log', function () {
    return view('login');
});


