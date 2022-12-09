<?php

namespace App\Http\Controllers;
// session_start();
use Illuminate\Http\Request;
use Auth;
use App\Models\Users;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // dd("constructor");
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    //     if(auth()->guard('users')->check()){

    //         return redirect()->route('skills.index');
    //     }else {
            return view('auth.login');
        // }
        // dd('index');
    }


    public function login(Request $request)
    {
         $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
// $projects=  Users::select('privillage')->where('email', $request['email'])->first();
//    if(isset($projects)){

// $data= $projects->privillage;


        //  global $data;
        $attempt = Auth::guard('web')->attempt($request->only('email','password'));
        if($attempt) {
            // dd(auth()->user());
            $user = auth()->user();
        //    dd($user);
            return redirect('/dash');
        } else {
            return redirect()->back()->withError('Credentials doesn\'t match.');
        }
    // }
    }
    
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
