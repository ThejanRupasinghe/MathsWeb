<?php

namespace App\Http\Controllers;

use App\Notes;
use App\Paper;
use App\Video;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function showPhotoUpload(){
        return view('Upload.photo_upload');
    }
    public function showDocumentUpload(){
        return view('Upload.document_upload');
    }
    public function showVideoUpload(){
        return view('Upload.video_upload');
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

    public function uploadDocument(Request $request){

        if($request->type==1){

            $this->validate($request, [
                'name'=> 'required|min:2|unique:papers'
            ]);

            $file=$request->file('paper');

            if ($file->getClientMimeType() !== 'application/pdf')
            {
                session()->flash('msg', 'Sorry! incorrect file type.');
                return redirect()->back();
            }

            $fileName = $request->name . ".pdf";
//            $file->move('files/pdf',$fileName);
            $file->move(base_path() . '/storage/app/documents/papers', $fileName);
            session()->flash('msg', 'Paper has been successfully added.');

            $paper=new Paper();
            $paper->name=$request->name;
            $paper->visible_name=$request->visible_name;
            $paper->save();

            return redirect()->back();

        }else{

            $this->validate($request, [
                'name'=> 'required|min:2|unique:notes'
            ]);

            $file=$request->file('paper');

            if ($file->getClientMimeType() !== 'application/pdf')
            {
                session()->flash('msg', 'Sorry! incorrect file type.');
                return redirect()->back();
            }

            $fileName = $request->name . ".pdf";
//            $file->move('files/pdf',$fileName);
            $file->move(base_path() . '/storage/app/documents/notes', $fileName);
            session()->flash('msg', 'Note has been successfully added.');

            $note=new Notes();
            $note->name=$request->name;
            $note->visible_name=$request->visible_name;
            $note->save();

            return redirect()->back();
        }

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
