<?php

namespace App\Http\Controllers;

use App\Paper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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
            $documents = DB::table('papers')->paginate(6);
            $active_paper = "active";
            $active_note = "null";
            $active_video = "null";
        }else if($type=="notes"){
            $documents = DB::table('notes')->paginate(6);
            $active_paper = "null";
            $active_note = "active";
            $active_video = "null";
        }else if($type=="videos"){
            $documents = DB::table('videos')->paginate(4);
            $active_paper = "null";
            $active_note = "null";
            $active_video = "active";
        }
        return view('download.index', compact('documents','active_paper','active_note','active_video'));
    }

    public function getPDF($type, $name){
        $path='/documents/'.$type.'/'.$name.'.pdf';
        $pdf=Storage::disk('local')->get($path);
        ob_end_clean();
        return response($pdf,200,['Content-type'=>'application/pdf']);
    }


    public function loginStudent(){
        return view('MemberLogin.studentLogin');
    }
}
