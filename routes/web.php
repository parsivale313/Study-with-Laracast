<?php

use Illuminate\Support\Facades\Route;
use App\Models\job;

Route::get('/', function () {
    
    return view('home') ; 

});

Route::get('/jobs' , function()  {
    $job = Job::with('employer')->cursorPaginate(3);
    return view('jobs.index' ,[ 
        'jobs' => $job
    ]);
});

Route::get('jobs/create', function() {
    return view('jobs.create');
});

Route::get('/jobs/{id}' , function($id) {
    $job = Job::find($id);

    return view('jobs.show' , ['job' => $job]);
});

Route::get('contact' , function(){
    return view('contact');
});