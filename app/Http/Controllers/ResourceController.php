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
        $student = DB::table('users')->where('username', strval($request->studentId))->first();

        if($student==Null){
            session()->flash('msg', 'Student ID is incorrect.');
            return redirect()->back();
        }

        $pass=Auth::attempt(['username'=>$request['studentId'],'password'=>$request['studentId']]);

        if($pass){
            session()->flash('msg', 'Log In is successful.');
            return redirect()->route('fetchDownloads',['type'=>'papers']);
        }
        else{
            session()->flash('msg', 'Student ID is incorrect.');
            return redirect()->back();
        }
        
    }

    public function fetchDownloads($type)
    {
        //$student = DB::table('students')->where('studentId', strval($request->studentId))->first();
        if($type=="papers"){
            $papers = DB::table('papers')->paginate(6);
            $active_paper = "active";
            $active_note = "null";
            $active_video = "null";
            return view('download.index', compact('papers','active_paper','active_note','active_video'));
        }else if($type=="notes"){
            $papers = DB::table('notes')->paginate(6);
            $active_paper = "null";
            $active_note = "active";
            $active_video = "null";
            return view('download.index', compact('papers','active_paper','active_note','active_video'));
        }

    }


    public function loginStudent(){
        return view('MemberLogin.studentLogin');
    }
}
