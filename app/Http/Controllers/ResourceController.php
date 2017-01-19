<?php

namespace App\Http\Controllers;

use App\Paper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResourceController extends Controller
{
    //
    public function showDownloads(){
        $papers=Paper::all();
      //  $papers = DB::table('users')->count();
        return view('Downloads.showPapers',compact('papers'));
    }
}
