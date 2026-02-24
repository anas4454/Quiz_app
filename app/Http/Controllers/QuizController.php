<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Http\Requests\StoreQuizRequest;
use App\Http\Requests\UpdateQuizRequest;

class QuizController extends Controller
{
    // user-side dashboard route
    public function index()
    {
       return view('user-quiz.user-dashboard');
    }

   //user-side quiz route
   public function quiz(){
    return view('user-quiz.quiz');
   }

   // user-side result route

   public function result(){
    return view('user-quiz.result');
   }

   //user-side profilt route

   public function profile(){
    return view('user-quiz.profile');
   }
}

