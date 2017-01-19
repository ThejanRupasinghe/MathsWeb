<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class DownloadController extends Controller
{
    public function getDownload($file_name) {
        $file_path = public_path('files/pdf/'.$file_name);
        return response()->download($file_path);
    }


}
