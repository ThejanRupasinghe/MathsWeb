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

//PAGES
Route::get('/', function () {
    return view('home.index');
});
Route::get('/portfolio', function () {
    return view('Portfolio.portfolio');
});
Route::get('/services', function () {
    return view('Services.services');
});

Route::get('/contact-me', function () {
    return view('contact.index');
});

Route::get('/font', function () {
    return view('fonts_test');
});


Route::get('/carousel', function () {
    return view('practiceWeb');

});

Route::get('/test/download', function () {
    return view('test');});

Route::get('/login', function () {
    return view('Login.login');});


Route::patch('/login/user', [
    'uses' => 'LoginControler@loginUser'
]);



Route::get('/select/photo', 'UploadController@showPhotoUpload');
Route::get('/select/video', 'UploadController@showVideoUpload');
Route::get('/select/paper', 'UploadController@showPaperUpload');


Route::patch('/upload/photo', 'UploadController@uploadPhoto');
Route::patch('/upload/video', 'UploadController@uploadVideo');
Route::patch('/upload/paper', 'UploadController@uploadPaper');


Route::get('/download/{file}','DownloadController@getDownload');


Route::get('/downloads','ResourceController@showDownloads');




