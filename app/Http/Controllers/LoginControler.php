<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;

class LoginControler extends Controller
{
    //

    public function loginUser(Request $request)
    {

        $user = DB::table('users')->where('name', strval($request->name))->first();
       

            if($user==Null){
                session()->flash('msg', 'Username and password are incorrect.');
                return redirect()->back();
            }


        elseif ($user->password != $request->password) {
            session()->flash('msg', 'Username or password is incorrect.');
            return redirect()->back();
        }
            else if ($request->password == $user->password) {
                        session()->flash('msg', 'Log In is successful.');
                        return view('Login.adminHome', compact('user'));


                    }

    }
}
