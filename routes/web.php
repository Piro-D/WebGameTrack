<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [PageController::class, 'welcome']);

Route::get('/Create', [PageController::class, 'create']);