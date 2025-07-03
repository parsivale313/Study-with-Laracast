<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home') ; 
});

Route::get('/jobs' , function(){
    return view('jobs' , [
        'jobs' =>[
            [    
                'id' => 1,
                'title' =>'directory',
                'salary' => '$50,000',
            ],
            [
                'id' => 2,
                'title' => 'programer',
                'salary' => '$10,000'
            ],
            [
                'id' => 3,
                'title' => 'teacher',
                'salary' => '$40,00'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}' , function($id){
    $jobs = [
        [    
            'id' => 1,
            'title' =>'directory',
            'salary' => '$50,000',
        ],
        [
            'id' => 2,
            'title' => 'programer',
            'salary' => '$10,000'
        ],
        [
            'id' => 3,
            'title' => 'teacher',
            'salary' => '$40,00'
        ]
    ];
    
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    

    return view('job' , ['job' => $job]);
});

Route::get('contact' , function(){
    return view('contact');
});