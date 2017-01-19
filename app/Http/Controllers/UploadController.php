<?php

namespace App\Http\Controllers;

use App\Paper;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function showPhotoUpload(){
        return view('Upload.photo_upload');
    }
    public function showPaperUpload(){
        return view('Upload.paper_upload');
    }
    
    public function uploadPhoto(Request $request){
        $file=$request->file('image');
        $fileName=$file->getClientOriginalName();
        $request->file('image')->move('files/images',$fileName);
        session()->flash('msg', 'Image has been successfully added.');
        return redirect()->back();

    }
    public function uploadPaper(Request $request){


        $this->validate($request, [
            'name'=> 'required|min:2|max:8'

        ]);


        $file=$request->file('paper');
        if ($file->getClientMimeType() !== 'application/pdf')
        {
            
            session()->flash('msg', 'Sorry! incorrect file type.');
            return redirect()->back();
        }
        $fileName=$file->getClientOriginalName();
        $request->file('paper')->move('files/pdf',$fileName);
        session()->flash('msg', 'Paper has been successfully added.');


        $paper=new Paper();
        $paper->name=$fileName;
        $paper->exam=$request->exam;
        $paper->subject=$request->subject;
        $paper->grade=$request->grade;
        $paper->link=$request->link;
        $paper->save();




        return redirect()->back();

    }
}
