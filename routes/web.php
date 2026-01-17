<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demos', function () {
    return view('landing');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/test-react', function () {
    return view('test-react');
});
