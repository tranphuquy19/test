<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('questions')->nullable();
            $table->string('image');
            $table->unsignedInteger('id_categories')->unsigned();
            $table->foreign('id_categories')->references('id')->on('categories');
            $table->integer('auth')->unsigned(); 
            $table->foreign('auth')->references('id')->on('users');
            $table->timestamps();  
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test');
    }
}
