<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('master_config', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_page');
            $table->string('phone_number');
            $table->string('fb_page');
            $table->string('twitter_page');
            $table->string('likedin_page');
            $table->string('new_letter');
            $table->string('address');
            $table->string('email');
            $table->string('logo_image');
            $table->string('nav_icon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_config');
    }
}
