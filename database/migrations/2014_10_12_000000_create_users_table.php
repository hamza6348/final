<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('username')->unique();

            $table->string('cnic')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('country');
            $table->string('city');
            $table->string('adress');
            $table->string('pmdc');
            $table->string('gradcollege');
            $table->string('interest');
            $table->string('year');
           
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
