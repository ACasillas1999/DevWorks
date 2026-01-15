<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('servicios');
});

Route::get('/demos', function () {
    return view('welcome');
});

Route::get('/servicios', function () {
    return view('servicios');
});
