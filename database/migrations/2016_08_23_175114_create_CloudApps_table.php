<?php

use Jenssegers\Mongodb\Schema;
use Illuminate\Database\Migrations\Migration;

class CreateCloudAppsTable extends Migration
{
    protected $connection = 'mongodb';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection($this->connection)
            ->table('users', function (Blueprint $table)
            {
                $table->index('user_id');
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
        Schema::connection($this->connection)
            ->table('apps', function (Blueprint $collection)
            {
                $collection->drop();
            });
    }
}
