<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('username');
            $table->string('gender');
            $table->date('date');

            $table->string('symptom1');
            $table->string('symptom2');
            $table->string('symptom3');
            $table->string('symptom4');
            $table->string('remarks');
            $table->integer('user_id');
            $table->integer('patient_id');
           
            $table->string('age');



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
        Schema::drop('diags');
    }
}
