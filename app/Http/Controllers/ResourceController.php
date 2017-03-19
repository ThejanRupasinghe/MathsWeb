<?php

namespace App\Http\Controllers;

use App\Paper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ResourceController extends Controller
{
    //
    public function showDownloads(Request $request){
        $student = DB::table('students')->where('userId', strval($request->userId))->first();

        if($student==Null){
            session()->flash('msg', 'Username and password are incorrect.');
            return redirect()->back();
        }

        $pass=Auth::attempt(['username'=>$request['name'],'password'=>$request['password']]);

        if($pass){
            session()->flash('msg', 'Log In is successful.');
            $papers=Paper::all();
            //  $papers = DB::table('users')->count();
            return view('download.index',compact('papers'));
        }
        else{
            session()->flash('msg', 'Username or password is incorrect.');
            return redirect()->back();
        }
        
    }
    public function loginStudent(){
        return view('MemberLogin.studentLogin');
        
    }
}
