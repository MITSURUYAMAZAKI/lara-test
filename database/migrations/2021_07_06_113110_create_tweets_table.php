<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTweetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tweets', function (Blueprint $table) {
            // idカラム（メソッドの表記）
            $table->id();
            $table->string('title');
            $table->string('body');
            $table->timestamps();
            $table->string('contents');
        });
    }

// １マイグレーションファイルを作成する
// $ php artisan make:model Tweet --migration

// ２カラムを定義する

// ３マイグレーションを実行する


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tweets');
    }
}
