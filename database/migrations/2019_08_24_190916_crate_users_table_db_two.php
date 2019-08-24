<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateUsersTableDbTwo extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'users';
    public $dbConnection = 'laravelconverterdb_two';

    /**
     * Run the migrations.
     * @table users
     *
     * @return void
     */
    public function up()
    {
        Schema::connection($this->dbConnection)->create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 45);
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
