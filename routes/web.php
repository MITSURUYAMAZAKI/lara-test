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

Route::get('/',
// get送信
 function () {return view('welcome');
 // function () {return view('welcome.blade.php');
});

Route::get('/seedtech', function () {
    return view('seedtech');
});

Route::get('/seed/tech', function () {
    return view('seed/tech');
    //     return view('seed.tech'); ピリオドでもOK
});

Route::get('/tweets', 'TweetController@index');
// Route::get('URL', 'コントローラー@メソッド名')->('URLの名前')


// 宿題

// ① '/test' というリクエスト
// viewsフォルダのtest.blade.phpを返す
Route::get('/test', function () {
    return view('test');
});
// ②'/hello' というリクエスト
// seedフォルダ内の world.blade.phpを返す
Route::get('/hello', function () {
    return view('seed.world');
});
// ③ '/tweets/create' というリクエスト
// TweetControllerのcreateメソッドを経由して
// tweetsフォルダのcreate.blade.phpを返す
Route::get('/tweets/create', 'TweetController@create');

// ④Commentコントローラーを作成して
// '/comments'というリクエストのときに
// CommentControllerのindexメソッドを経由して
// views/commentsフォルダの index.blade.phpを返す
Route::get('/comments', 'CommentController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
