<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    // Add middleware
    public function __construct()
    {
        $this->middleware(['auth', 'verified', 'can:isAdmin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id')->get();
        // return $users;
        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $users = User::where('name','LIKE','%'.$query.'%')->get();
        return view('users.index')->with('users', $users);
    }

    /**
     * Ban the user resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ban($id)
    {
        
        User::where('id', $id)->update(['blocked_at' => Carbon::now()]);
        $user = User::find($id);
        return redirect()->action('UserController@index', ['users' => User::orderBy('id')->get()]);
    }

    /**
     * Allow the user resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function allow($id)
    {
        
        User::where('id', $id)->update(['blocked_at' => null]);
        $user = User::find($id);
        return redirect()->action('UserController@index', ['users' => User::orderBy('id')->get()]);
    }
    public function nullify() {
        User::where('level_status', 'up')->update(['level_status' => NULL]);
        return redirect('/levels');
    }
}
