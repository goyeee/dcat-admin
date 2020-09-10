<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('foo', function(){
    return 'foo';
});
Route::get('user', 'UserController@getuser');
Route::get('realuser','UserController@realGetUser');
Route::get('realuser2','UserController@realGetUser');
Route::post('form', function(){
    return 'this is a post request';
});
Route::any('any', 'UserController@allRequest');
Route::match(['post','get'], 'method', function(){
    echo 'welcome, the request method is ' ;
});
Route::redirect('foo','method','301');
Route::view('foo','foo',['name'=>'goyeee','age'=>'27']);

Route::get('/user/{userid}', 'UserController@getdetailbyid')->name('getuser');
Route::get('realgetdetailbyid/{userid}','UserController@realGetDetailById');
//Route::any('posts/{postid}/comments/{commentid}', function($postid,$commentid){
//    echo 'posts NO:' . $postid . ' has a comment NO:' . $commentid;
//});
Route::any('posts/{postid}/comments/{commentid?}', 'UserController@getComments');
Route::get('userdetail/{userid}',function($userid){
    $url = route('getuser',['userid' => 1]);
    return redirect()->route('getuser',['userid' => 1, 'name' => 'goyeee']);
});
Route::prefix('account')->group(function(){
    Route::get('index',function(){
        return 'This is Account > index page';
    });
});
Route::prefix('person')->middleware('web')->group(function(){
    Route::get('/age/{age}',function(){
        return 'auth is passed';
    });
    Route::match('get','badrequest',function(){
        return 'This is a bad Request';
    });
});
Route::get('201',function(){
    return response([], '201');
});
Route::get('redirect/{userid}', function($userid){
    return redirect()->route('getuser',['userid' => $userid]);
//    return redirect()->to('http://baidu.com');
});


Route::any('response', function(){
    return response(['1','2','3'],200)->header('Content-Type','Application/plain');
});
Route::any('html',function(){
    return response()->view('foo',['name'=>'goyeee','age'=>'28','userid'=>10],201)->header('Content-Type','text/html');
});
Route::get('route', function(){
//    dump(Route::current()->uri);
    dump(Route::currentRouteName());
})->name('route');
Route::resource('photos', 'PhotoController');
Route::get('request/{parmaters}', function(\Illuminate\Http\Request $request,$parmaters ) {
    return $request->input('parmaters');
});

Route::get('getjsondetail/{id}', 'UserController@getjsondetail');
Route::get('download',function(){
    return response()->download(__DIR__ . '/../storage/logs/laravel.log','log.log');
});
Route::get('streamdownload', function(){
    return response()->streamDownload(function(){
        echo 'stream';
    },'laravel-stream');
});
Route::get('file', function(){
//    return response()->file(__DIR__ . '/../storage/logs/laravel.log',['Content-Type'=>'Text/html']);
    return response()->file(dirname(__FILE__) . '/../storage/app/public/images/15833404688885.jpg');
});

Route::get('article','ArticleController@index');
Route::get('model','ArticleController@model');
