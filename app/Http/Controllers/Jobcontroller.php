<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class Jobcontroller extends Controller
{
    public function index(){
        $job = Job::with("employer")->latest()->cursorPaginate(3);

        return view('jobs.index' , [
            'jobs'=> $job
        ]);
    }
    
    public function create(){
        return view("jobs.create");
    }
    
    public function show($id){
        $job = job::find($id);
        return view("jobs.show" , ['job' => $job]);
    }

    public function store(){
        request()->validate([
            'title' => ['required','min:3'],
            'salary'=> ['required'],
        ]);

        JOb::create([
            'title'=> request('title'),
            'salary'=> request('salaey'),
            'employer_id'=> 1,
        ]);

        return redirect('/jobs');
    }

    public function edit(job $job){
        return view ('jobs.edit', ['job'=>$job]);
    }

    public function update(job $job){
        request()->validate([
        'title'=> ['required', 'min:3' ],
        'salary'=> ['required'],
    ]);
    $job->update([
        'title'=> request('title'),
        'salary'=> request('salary'),
    ]);
    
    // redirecr to the job page
    return redirect('/jobs/'. $job->id);
        
    }

    public function destroy(job $job){
        $job->delete();
        
        return redirect('/jobs/');

    }

}
