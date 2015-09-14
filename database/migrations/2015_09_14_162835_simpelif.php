<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Simpelif extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function($table)
        {
            $table->increments('id');
            $table->string('username', 255)->index()->nullable();
            $table->string('name', 255)->nullable();
            $table->string('password', 255)->nullable();
            $table->string('email', 100)->nullable();
            $table->integer('grouproleid');
            $table->rememberToken();
            $table->boolean('enabled')->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('user');
    }
}
