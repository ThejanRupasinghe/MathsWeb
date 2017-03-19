<?php

namespace App\Http\Controllers;

use App\Paper;
use App\Video;
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

        $this->validate($request, [
            'name'=> 'required|min:2|unique:papers'
        ]);

        $file=$request->file('photo');

//        if ($file->getClientMimeType() !== 'application/jpg')
//        {
//            session()->flash('msg', 'Sorry! incorrect file type.');
//            return redirect()->back();
//        }
//        
        $file=$request->file('image');
        $fileName=$file->getClientOriginalName();
        $request->file('image')->move('files/images',$fileName);
        session()->flash('msg', 'Image has been successfully added.');
        return redirect()->back();

    }

    public function uploadPaper(Request $request){

        $this->validate($request, [
            'name'=> 'required|min:2|unique:papers'
        ]);

        $file=$request->file('paper');

        if ($file->getClientMimeType() !== 'application/pdf')
        {
            session()->flash('msg', 'Sorry! incorrect file type.');
            return redirect()->back();
        }

//        $fileName=$file->getClientOriginalName();
        $fileName = $request->name . ".pdf";
        $file->move('files/pdf',$fileName);
        session()->flash('msg', 'Paper has been successfully added.');

        $paper=new Paper();
        $paper->name=$request->name;
        $paper->save();

        return redirect()->back();

    }


    public function uploadVideo(Request $request){

        $this->validate($request, [
            'name'=> 'required|min:2|unique:videos'
        ]);



        
        $video=new Video();
        $video->name=$request->name;
        $video->link=$request->link;
        $video->save();
        session()->flash('msg', 'Video has been successfully added.');


        return redirect()->back();

    }
}
