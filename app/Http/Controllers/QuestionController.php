<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Gate;
use App\User;
use App\Level;

class QuestionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified', 'active_user']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $current_time = Carbon::now()->toDateTimeString();
	    // return view('wait');
        $user_level = auth()->user()->game1_score;
        $user = auth()->user();
        $question = Level::where('id', $user_level)->first();
	if(Gate::allows('isAdmin') && Level::where('id', $user_level)->exists()){
            return view('question')->with(['question' => $question, 'current_time' => $current_time]);
        }

        

        if ($user->level_status == "up"){
            return redirect('levelup');
        }
        elseif (Level::where('id', $user_level)->exists() && $user_level == $question->id){
            return view('question')->with(['question' => $question, 'current_time' => $current_time]);
        }
        else return view('wait');
        
    }

    public function check(Request $request) {
	    // return redirect('question');
        $user_level = auth()->user()->game1_score;
        $user = User::where('id', auth()->user()->id)->get()->first();
        $question = Level::where('id', $user_level)->first();
        if ($request->input('answer') == Crypt::decryptString($question->solution)){
            $user->increment('level');
            $user->increment('game1_score');
            $user->level_status = 'up';
            $user->updated_at = Carbon::now();
            $user->save();
            // return $user;
            
            return redirect('question')->with('success', 'Congratulations! You levelled up!');        
        } 
        else {
            return redirect('question')->with('error', "That's an incorrect answer! Try again...");
        }
    }

    public function levelup()
    {   
        $current_time = Carbon::now()->toDateTimeString();
        $user_level = auth()->user()->game1_score - 1;
        $user = auth()->user();
        $question = Level::where('id', $user_level)->first();
        return view('levelUp')->with(['question' => $question, 'current_time' => $current_time]);
    }

    public function level2question(Request $request)
    {
        $user = User::where('id', auth()->user()->id)->get()->first();
        $user->level_status = NULL;
        $user->save();
        // return auth()->user();
        return redirect('question');
    }
    
}

