<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('Sid');
            $table->string('Firstname');
            $table->string('Lastname');
            $table->string('Fathername');
            $table->bigInteger('Studentnic');
            $table->bigInteger('Age');
            $table->string('Gender');
            $table->string('Address');
            $table->bigInteger('Postalcode');
            $table->string('City');
            $table->string('Country');
            $table->bigInteger('Contactno');
            $table->string('Email');
            $table->string('Username');
            $table->string('Password');
            $table->string('SCid');
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
        Schema::dropIfExists('students');
    }
}
