<?php

namespace App\Http\Controllers;

use App\Paper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ResourceController extends Controller
{

    public function showDownloads(Request $request){

        //$student = DB::table('students')->where('studentId', strval($request->studentId))->first();
        $student = DB::table('users')->where('id', strval($request->studentId))->first();

        if($student==Null){
            session()->flash('msg', 'User ID is incorrect.');
            return redirect()->back();
        }

        $pass=Auth::attempt(['username'=>$request['studentId'],'password'=>$request['studentId']]);

        if($pass){
            session()->flash('msg', 'Log In is successful.');
            return redirect()->route('fetchDownloads');
        }
        else{
            session()->flash('msg', 'Student ID is incorrect.');
            return redirect()->back();
        }
        
    }

    public function fetchDownloads()
    {

        //$student = DB::table('students')->where('studentId', strval($request->studentId))->first();

        $papers = DB::table('papers')->paginate(6);
        return view('download.index', compact('papers'));


    }


    public function loginStudent(){
        return view('MemberLogin.studentLogin');

        
    }
}
