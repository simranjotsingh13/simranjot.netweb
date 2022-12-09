<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use App\Models\Skills;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=  auth()->user()->id;
        // dd($data);
        $user= Task::where('assignedto','=',$data)->get();
        
        return view('assigned-task',compact("user"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    { 
        $new =Skills::all();
        
        $data=User::where("is_admin", 0)->get();
        return view('add-task',['data'=> $data,"new"=>$new]);

   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->validate([
            'assign'=>'required',
            'user'=>'required',
            'skill'=>'required',
            'limit'=>'required',
            'date'=>'required',
            'time'=>'required',
            'title'=>'required',
            'file'=>'required',


        ]);

        $user= new Task;
        $user->assignedby=auth()->user()->id;
        $user->assignedto=$request['assign'];
        $user->skill=implode(",",$request['skill']) ;
        $user->limit= $request['limit'];
        $user->date= $request['date'];
        $user->estimatedtime= $request['time'];
        $user->title= $request['title'];
 
        if($files=$request->file('file')){  
            $name=$files->getClientOriginalName();  
            $files->move('upload',$name);  
            $user->file=$name;  
            }  
            // $data->save();  
        $user->save();
        return redirect('/dash');




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
