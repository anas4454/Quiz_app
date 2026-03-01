<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    // user-side dashboard route
    public function index()
    {

        $quiz = Quiz::all();

        // dd($quiz);

        return view('user-quiz.user-dashboard', compact('quiz'));
    }

    // user-side quiz route
    //    public function quiz(Quiz $quiz){

    //    $quiz = Question::all();
    //     return view('user-quiz.quiz');
    //    }

    public function start(Quiz $quiz)
    {

        $quiz->load('questions.options');

        return view('user-quiz.quiz', compact('quiz'));
    }

    // user-side result route

    public function submit(Request $request ,  Quiz $quiz)
    {

        $score = 0;

        if($request->has('answers')){
        foreach($request->answers as $questionId=>$optionId){
            $correctOption = Option::where('question_id' , $questionId)->where('is_correct' , true)->first();

            if($correctOption && $correctOption->id == $optionId){
                $score++;
            }

        }

        }

        $totalQuestion = $quiz->questions()->count();



        return view('user-quiz.result', compact('score' , 'totalQuestion'));
    }

    // user-side profilt route

    public function profile()
    {
        return view('user-quiz.profile');
    }
}
