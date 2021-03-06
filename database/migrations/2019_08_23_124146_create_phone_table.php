<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhoneTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'phones';
    public $dbConnection = 'laravelconverterdb_one';

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
            $table->bigIncrements('id');
            $table->string('phone', 45);
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
