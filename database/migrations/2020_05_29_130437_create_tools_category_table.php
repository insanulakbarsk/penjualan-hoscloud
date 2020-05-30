<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToolsCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tools_category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tools_id')->unsigned()->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('tools_id')->references('id')->on('tools');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tools_category');
    }
}
