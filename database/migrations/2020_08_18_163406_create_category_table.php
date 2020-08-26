<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('categoryid');
            $table->unsignedInteger('categoryid');
            $table->unsignedTinyInteger('languageid')->default('0');
            $table->unsignedInteger('parentid')->default('0');
            $table->string('categoryname')->default('');
            $table->string('indextemlatepath')->default('');
            $table->string('listtemplatepath')->default('');
            $table->string('detailtemplatepath')->default('');
            $table->string('previewurl')->default('');
            $table->string('keywords')->default('');
            $table->string('description')->default('');
            $table->unsignedInteger('sortid')->default('0');
            $table->unsignedInteger('viewcount')->default('0');
            $table->dateTime('addtime')->default('0000-00-00 00:00:00');
            $table->timestamp('systemtime')->default('CURRENT_TIMESTAMP');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
}
