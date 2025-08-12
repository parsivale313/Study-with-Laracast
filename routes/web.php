<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Jobcontroller;
use App\Models\Job;

Route::view('/','home');
Route::view('contact' ,'contact');

Route::resource('jobs',Jobcontroller::class);

