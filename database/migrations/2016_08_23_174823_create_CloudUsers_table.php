<?php

use Jenssegers\Mongodb\Schema;
use Illuminate\Database\Migrations\Migration;

class CreateCloudUsersTable extends Migration
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
                $table->index('name');
                $table->string('password',64);
                $table->unique('email');
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
            ->table('users', function (Blueprint $collection)
            {
                $collection->drop();
            });
    }
}
