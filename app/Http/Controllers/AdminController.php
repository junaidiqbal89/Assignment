<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin_login');
    }

    public function Dashboard()
    {
        return view('admin.index');
    }

    public function Login(Request $request)
    {
        // dd($request->all());

        $check =$request->all();
        if(Auth::guard('admin')->attempt(['email' => $check['email'],
        'email' => $check['email'] ]))
        {
            return redirect()->route('admin.dashboard')->with('error','Admin Login Successfully');
        }else{
            return back()->with('error','Invalid email or Password');
        }
    }
}
