<?php

namespace App\Http\Controllers;

use App\Paper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ResourceController extends Controller
{
    //
    public function showDownloads(Request $request){
        $student = DB::table('students')->where('studentId', strval($request->studentId))->first();

        if($student==Null){
            session()->flash('msg', 'Student ID is incorrect.');
            return redirect()->back();
        }


        if($student){
            session()->flash('msg', 'Log In is successful.');
            $papers=DB::table('papers')->paginate(6);
            //  $papers = DB::table('users')->count();
            return view('download.index',compact('papers'));
        }
        else{
            session()->flash('msg', 'Student ID is incorrect.');
            return redirect()->back();
        }
        
    }
    public function loginStudent(){
        return view('MemberLogin.studentLogin');
        
    }
}
