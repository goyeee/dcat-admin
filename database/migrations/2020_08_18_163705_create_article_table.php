<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->increments('articleid');
            $table->unsignedTinyInteger('languageid')->default('0');
            $table->string('title')->default('');
            $table->string('subtitle')->default('');
            $table->string('comefrom')->default('');
            $table->string('author')->default('');
            $table->string('summary')->default('');
            $table->unsignedTinyInteger('isoriginal')->default('1');
            $table->unsignedTinyInteger('isbold')->default('0');
            $table->string('linkurl')->default('');
            $table->unsignedTinyInteger('usertypeid')->default('0');
            $table->string('thumbimagepath')->default('');
            $table->unsignedTinyInteger('tabletypeid')->default('0');
            $table->unsignedInteger('viewcount')->default('0');
            $table->unsignedInteger('favoritecount')->default('0');
            $table->unsignedInteger('likecount')->default('0');
            $table->unsignedTinyInteger('articlestatus')->default('0');
            $table->dateTime('addtime');
            $table->unsignedTinyInteger('istask')->default('0');
            $table->dateTime('publishtime');
            $table->unsignedInteger('adminid')->default('0');
            $table->timestamp('systemtime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}
