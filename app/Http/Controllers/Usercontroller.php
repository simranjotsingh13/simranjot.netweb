<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\department; 
use App\Models\Skills; 
class Usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    // dd(auth()->user());

        $user= User::all();
     return view('user-view')->with(compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user =department::all();
   
        $data= $user->pluck("name");
           $new =skills::all();
    
          return view('users',compact('new','data'));
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
        // echo "<pre>";
        // print_r($request['status']);
//  $option = '';
//         foreach ($request['skill'] as $key => $value) {
//          $option = $value;
        // }
        //     'name' => $request->name
        // ];
        // modal::create($data);

  
  
        $data= $request->validate([
            'user'=>'required',
            'code'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'phone'=>'required',
            'joining'=>'required',
            'select'=>'required',
            'skill'=>'required',
            'status'=>'required',
        ]);



        $users= new User;
        $users->name=$request['user'];
        $users->code=$request['code'];
        $users->email=$request['email'];
        $users->phone=$request['phone'];
        $users->password= bcrypt($request['password']);
        
        $users->joining=$request['joining'];
        $users->department=$request['select'];
        // $users->skills= json_encode($request->skill);
        $users->skills= implode(",",$request->skill);

        $users->is_admin= $request->status;
        $users->save();
        return  redirect('user');
        // dd(implode(",",$request->skill));
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
