<?php

namespace App\Http\Controllers;

use App\Mail\Test;
use App\Models\Option;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuestionController extends Controller
{
    public function sendEmail()
    {

        Mail::to('anasch14g@gmail.com')->send(new Test);

        return 'Email Sent';

    }

    public function question()
    {

        $quizzes = Quiz::all();

        return view('dashboard-pages.add-question', compact('quizzes'));
    }

    public function addQuestion(Request $request)
    {

        $request->validate([
            'quiz_id' => 'required',
            'question_text' => 'required',
            'options' => ['required' , 'array' , 'size:4'],
            'correct_answer' =>  ['required' , 'integer' , 'min:1' , 'max:4'],
        ]);

        $question = Question::create([
            'quiz_id' => $request->quiz_id,
            'question_text' => $request->question_text,
        ]);

        foreach($request->options as $index => $singleOption)
        Option::create([
            'question_id' => $question->id,
            'option_text' => $singleOption,
            'is_correct' =>( $request->correct_answer == $index+1),
        ]);

        return redirect()->back()->with('message', 'question was created successfully.');
    }
}
