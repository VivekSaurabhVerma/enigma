<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use App\Level;
use DB;

class LevelController extends Controller
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
        // if(Gate::allows('isAdmin')){
        //     $levels = Level::orderBy('created_at')->get();
        //     return view('levels.index')->with('levels', $levels);
        // }
        // else{
        //     return redirect()->route('welcome')->with('error', 'Unauthorized Access');
        // }
        $levels = Level::orderBy('id')->get();
        $count = count($levels);
        for ($i=0; $i < $count ; $i++) { 
            $level = $levels[$i];
            $solution = Crypt::decryptString($level->solution);
            $level->solution = $solution;
        }
        // $url = 'https://s3.' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') . '/level_images/aaaaa_1589445056.png';
        // return "<img src=$url>";
        return view('levels.index')->with('levels', $levels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('levels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|max:1999',  
            'solution' => 'required',
        ]);
        
        // Handle File Upload
        // Get filename with the extension
        $filenameWithExt = $request->file('image')->getClientOriginalName();
        // Get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just ext
        $extension = $request->file('image')->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore= $filename.'_'.time().'.'.$extension;
        // Upload Image
        $path = $request->file('image')->storeAs('level_images', $fileNameToStore, 's3');
        // Set visibility of path public
        Storage::disk('s3')->setvisibility($path, 'public');
        $request->file('image')->storeAs('level_images', $fileNameToStore, ['disk' => 's3']);
        // Create level
        $level = new Level;
        $level->solution = Crypt::encryptString($request->input('solution'));
        $level->image = Storage::disk('s3')->url($path);
        $level->save();
        return redirect('/levels')->with('success', 'Level created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $level = Level::find($id);
        $level->solution = Crypt::decryptString($level->solution);
        return view('levels.edit')->with('level', $level);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $level = Level::find($id);

        // Check if request has file
        if ($request->hasFile('image')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('level_images', $fileNameToStore, 's3');
            // Set visibility of path public
            Storage::disk('s3')->setvisibility($path, 'public');
            $request->file('image')->storeAs('level_images', $fileNameToStore, ['disk' => 's3']);   
            
            $level->image = Storage::disk('s3')->url($path);
        }        


        // Update level
        $level->solution = Crypt::encryptString($request->input('solution'));
        $level->save();
        return redirect('/levels')->with('success', 'Level '. $id .' Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    } 
}
