<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

// define a new route that user can access it through browser
// define a controller that render a view
// define view that contains list of posts
// remove any static html data from the view and replace it with dynamic data from controller
