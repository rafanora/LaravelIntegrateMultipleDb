<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CratePhonesTableDbTwo extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'phones';
    public $dbConnection = 'laravelconverterdb_two';

    /**
     * Run the migrations.
     * @table phone
     *
     * @return void
     */
    public function up()
    {
        Schema::connection($this->dbConnection)->create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('phone', 45);
            $table->Integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
        Schema::connection($this->dbConnection)->dropIfExists($this->tableName);
     }
}
