<?php

namespace App\Http\Controllers;

use App\Models\Notes; 
use App\Models\Skills;

use Illuminate\Http\Request;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(isset(auth()->user()->id) && auth()->user()->checkAdmin()){
        
            $user=Notes::all();
            // global $user
            return view('view-note')->with(compact('user'));
        }
        if(isset(auth()->user()->id) && !auth()->user()->checkAdmin()){
            $data=auth()->user()->id;
            $user=Notes::where("userid", "=", $data)->get();
            // global $user
            return view('view-note')->with(compact('user'));
        }
       

    
    //   return view('view-note')->with(compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
        $data=Skills::all();
       
        return view("add-note")->with(compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  $request->validate([
    'title'=>'required',
    'description'=>'required',

    'skill'=>'required',

    'user'=>'required',

  

  ]);
   
        $user= new Notes;
       $user->title= $request['title'];
       $user->description= $request['description'];
       $user->skill= $request['skill'];
       $user->userid= $request['user'];
       $user->save();
    return redirect('/note') ;



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
        //
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
        //
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
