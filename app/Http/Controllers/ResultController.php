<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Http\Requests\StoreResultRequest;
use App\Http\Requests\UpdateResultRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ResultController extends Controller
{
    public function result(){
        return view('dashboard-pages.view-result');
    }

     public function updatePassword(Request $request)
    {

        $request->validate([
            'password' => 'required',
        ]);

        $user = Auth::user();

        $user->update(
            ['password' => Hash::make($request->password)]
        );

        return back()->with('success', 'Password update successfully.');
    }
}
