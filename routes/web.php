<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ('Hello World com Laravel');
});

/* Route::get('/', function () {
    return view('welcome');
}); */
// http://127.0.0.1:8000 ou http://localhost:8000