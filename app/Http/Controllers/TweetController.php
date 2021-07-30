<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// App/Tweetのクラスを使いますの宣言
use App\Tweet;

class TweetController extends Controller
{
    function index(){
        // エロクエント

        $tweet = Tweet::find(1);
        $tweet2 = Tweet::find(2);
    
        // $tweets = Tweet::all();
        // $tweets = Tweet::where('title','test')->get();
        // select * from tweet where id = 1; と同じ（tweetテーブルのid=1をとってくる）
        // dd($tweets)
        
        return view('tweets.index', ['tweet' => $tweet, 'tweet2' => $tweet2]);
        

        // ['ビューファイルで呼び出したい名前' => $変数（配列）]
        // 第二引数には　ビューで呼び出すもの => 変数


    }

    


    function create(){
        return view('tweets.create');
    }




}
