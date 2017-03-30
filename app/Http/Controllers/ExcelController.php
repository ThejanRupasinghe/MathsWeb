<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use DB;
use Excel;
use Illuminate\Support\Facades\Input;

class ExcelController extends Controller
{
    public function showStudentExcel(){
        return view('Upload.user_excel_upload');
    }

    public function addStudentExcel(Request $request){

        if(Input::hasFile('user_excel')){
            $path = $request->file('user_excel')->getRealPath();
            $data = Excel::load($path, function($reader) {
            })->get();
            if(!empty($data) && $data->count()){
                foreach ($data as $rows) {
                    foreach ($rows as $row) {
                        $insert[] = ['name' => $row->name, 'username' => $row->studentid, 'password' => bcrypt($row->studentid)];
                    }
                }
                if(!empty($insert)){
                    DB::table('users')->insert($insert);
                    session()->flash('msg', 'Students successfully added.');
                    return redirect()->back();
                }
            }
        }
        return redirect()->back();

    }
}