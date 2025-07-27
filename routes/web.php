<?php

use Illuminate\Support\Facades\Route;
use App\Models\job;

Route::get('/', function () {
    
    return view('home') ; 

});

Route::get('/jobs' , function()  {
    $job = Job::with('employer')->cursorPaginate(3);
    return view('jobs' ,[ 
        'jobs' => $job
    ]);
});

Route::get('/jobs/{id}' , function($id) {
    $job = Job::find($id);

    return view('job' , ['job' => $job]);
});


Route::get('contact' , function(){
    return view('contact');
});