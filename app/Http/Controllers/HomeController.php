<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use App\User;

class prizeImage{
    public $location;
    public $label;
    function __construct($location,$label) {
        $this->location = $location;
        $this->label = $label;
      }
}

class Person{
    public $name;
    public $designation;
    public $email;
    public $contact;
    function __construct($name,$designation,$email,$contact) {
        $this->name = $name;
        $this->designation = $designation;
        $this->email = $email;
        $this->contact = $contact;
    }

}


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified', 'active_user'])->except(['welcome', 'rules']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $current_time = Carbon::now()->toDateTimeString();
        return view('home')->with(['current_time' => $current_time]);
    }

    public function leaderboard() 
    {
        $currentUser = auth()->user();
        $users = User::orderBy('game1_score', 'desc')->orderBy('updated_at', 'asc')->get();
          
        // Find rank of current user
        $user_ids = User::orderBy('game1_score', 'desc')->orderBy('updated_at', 'asc')->pluck('id')->all();
        $collection = collect($user_ids);
        $user_rank = $collection->search(auth()->user()->id) + 1;
        $currentUser->rank = $user_rank;
        
        return view('leaderboard', ['currentUser' => $currentUser, 'users' => $users]);
    }

    public function overall()
    {
        $currentUser = auth()->user();
        $users = User::orderBy('level', 'desc')->orderBy('updated_at', 'asc')->get();
        
        // Find rank of current user
        $user_ids = User::orderBy('level', 'desc')->orderBy('updated_at', 'asc')->pluck('id')->all();
        $collection = collect($user_ids);
        $user_rank = $collection->search(auth()->user()->id) + 1;
        $currentUser->rank = $user_rank;
        
        return view('overallleaderboard', ['currentUser' => $currentUser, 'users' => $users]);
    }
    public function welcome() 
    {
        $images = array();
        $persons=array();
        $labels = array("Earphones", "Wifi Router", "Smartwatch", "Mouse &  Keyboard", "VIP Passes", "Gaming Mouse", "Online Courses", "Power Bank");
        for ($x = 1;$x<=8;$x++){
            array_push($images,new prizeImage("p".(string)$x.".png",$labels[$x-1]));
        }

        //add persons here
        array_push($persons,new Person("Rahul Shanbhag","Events Manager,Techfest","rshanbhag.techfest@gmail.com","+91 916 709 6849"));
        array_push($persons,new Person("Deepanshu Mathankar","Events Manager,Techfest","deepanshu.techfest@gmail.com","+91 996 722 1353"));
        array_push($persons,new Person("Ravi Jangir","Creatives Manager,Techfest","ravijangir.techfest@gmail.com","+91 999 646 9559"));
        array_push($persons,new Person("Vivek Saurabh Verma","Web Manager,Techfest","viveksv.techfest@gmail.com","+91 946 230 0696"));
        array_push($persons,new Person("Aman Mishra","Marketing Manager,Techfest","amanmishra.techfest@gmail.com","+91 730 419 8634"));
        array_push($persons,new Person("Siddharth Singh","Publicity Manager,Techfest","siddharth.techfest@gmail.com","+91 996 780 6330"));

        return view('welcome', ['images' => $images, 'persons' => $persons]);
    }

    public function rules()
    {
        return view('rules');
    }
    
}
