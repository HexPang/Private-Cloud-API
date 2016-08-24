<?php

use Jenssegers\Mongodb\Schema;
use Illuminate\Database\Migrations\Migration;

class CreateCloudDatasTable extends Migration
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
            ->table('data', function (Blueprint $table)
            {
                $table->string('app_id');
                $table->string('key');
                $table->string('value');
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
            ->table('data', function (Blueprint $table)
            {
                $table->drop();
            });

    }
}
