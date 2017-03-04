<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Null_;

class LoginController extends Controller
{

    public function loginUser(Request $request)
    {

        $user = DB::table('users')->where('username', strval($request->name))->first();

        if($user==Null){
            session()->flash('msg', 'Username and password are incorrect.');
            return redirect()->back();
        }

        $pass=Auth::attempt(['username'=>$request['name'],'password'=>$request['password']]);

        if($pass){
            session()->flash('msg', 'Log In is successful.');
            return view('Login.adminHome', compact('user'));
        }
        else{
            session()->flash('msg', 'Username or password is incorrect.');
            return redirect()->back();
        }

    }

    public function logoutUser(){
        Auth::logout();
        return redirect()->route('login');
    }
}
