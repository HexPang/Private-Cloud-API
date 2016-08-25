<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class CreateCloudAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apps',function(\Illuminate\Database\Schema\Blueprint $table){
          $table->increments('id');
          $table->string('app_id')->unique();
          $table->string('user_id');
          $table->string('app_name',64);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('apps');
    }
}
