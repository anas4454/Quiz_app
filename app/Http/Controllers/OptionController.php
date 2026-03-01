<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OptionController extends Controller
{
    public function option()
    {
        return view('dashboard-pages.create-quiz');
    }

    public function createQuiz(Request $request)
    {
        $request->validate([
            'title'=>['required' , 'string'],
            'description'=>['required' , 'string'],
            'question'=>['required' , 'integer'],
            'minutes'=>['required' , 'integer'],
            'stage'=>['required' , 'string'],
        ]);

        Quiz::create([
            "title" => $request->title ,
            "slug" => Str::slug($request->title) ,
            "description"=>$request->description,
            "question"=>$request->question,
            "minutes"=>$request->minutes,
            "stage"=>$request->stage,
        ]);


        return redirect()->back()->with('message' , 'You successfully added the Question.');
    }
}
