<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skills; 

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user= Skills::all();
        // $data= json_decode($user);
        // echo "<pre>";
        // print_r($user);
     return view('view-skill')->with(compact('user'));
        // dd($_SESSION);
        //
        // return view('dashboard');
        // dd($session('status'));
        // dd(session('data'));
        // dd('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("skills");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    $request->validate([
        'skill'=>'required',
        'description'=>'required',
    
    ]);

    $skill= new Skills;
    $skill->skillname=$request['skill'];
    $skill->description=$request['description'];
    $skill->save();
    return redirect('/skills/create');
        // dd('skills');
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
