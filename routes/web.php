<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DemoController;


Route::get('/', function () {
    return view('home');
});
