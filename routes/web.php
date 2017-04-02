<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//PAGE ROUTES
Route::get('/', [
    'as' =>'home',
    function () {
        return view('home.index');
    }
]);

Route::get('/gallery', function () {
    return view('gallery.index');
});

Route::get('/download', [
   'uses' => 'ResourceController@loginStudent'
]);

Route::patch('/show/download', [
    'uses' => 'ResourceController@showDownloads'
]);

Route::get('/documents/{type}', [
    'uses' => 'ResourceController@fetchDownloads',
    'as' =>'fetchDownloads'
])->middleware('auth');;

Route::get('/documents/{type}/{name}',[
    'uses' => 'ResourceController@getPDF',
    'as' =>'getPDF'
])->middleware('auth');

Route::get('/contact-me', function () {
    return view('contact.index');
});

Route::get('/results', function () {
    return view('results.index');
});

Route::get('/logout-student', function () {
    Auth::logout();
    return redirect()->route('home');
})->middleware('auth');

Route::get('/font', function () {
    return view('fonts_test');
});
//PAGES OVER


Route::get('/carousel', function () {
    return view('practiceWeb');

});

Route::get('/test/download', function () {
    return view('test');
});


//LOGIN Routes
Route::get('/login', [
    'as'=>'login',
    function () {
        return view('Login.login');
    }
]);

Route::patch('/login/user', [
    'uses' => 'LoginController@loginUser'
]);
//LOGIN OVER

//ADMIN ROUTES
Route::group(['middleware'=> 'admin'], function() {
    Route::get('/select/photo', 'UploadController@showPhotoUpload');
    Route::get('/select/video', 'UploadController@showVideoUpload');
    Route::get('/select/document', 'UploadController@showDocumentUpload');
    Route::get('/select/student_excel','ExcelController@showStudentExcel');

    Route::patch('/upload/photo', 'UploadController@uploadPhoto');
    Route::patch('/upload/video', 'UploadController@uploadVideo');
    Route::patch('/upload/document', 'UploadController@uploadDocument');
    Route::post('/upload/user_excel', 'ExcelController@addStudentExcel');

    Route::get('/logout',[
        'uses'=>'LoginController@logoutUser',
        'as'=>'logout'
    ]);
});
//ADMIN OVER



//to test
//
//
//    Route::get('/select/photo', 'UploadController@showPhotoUpload');
//    Route::get('/select/video', 'UploadController@showVideoUpload');
//    Route::get('/select/paper', 'UploadController@showPaperUpload');
//    Route::get('/select/student_excel','ExcelController@showStudentExcel');
//
//    Route::patch('/upload/photo', 'UploadController@uploadPhoto');
//    Route::patch('/upload/video', 'UploadController@uploadVideo');
//    Route::patch('/upload/paper', 'UploadController@uploadPaper');
//    Route::post('/upload/user_excel', 'ExcelController@addStudentExcel');


Route::get('/download/{file}','DownloadController@getDownload');


//Route::get('/downloads','ResourceController@showDownloads');