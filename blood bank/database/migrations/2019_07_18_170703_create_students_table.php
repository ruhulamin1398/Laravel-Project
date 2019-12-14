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
            $table->bigIncrements('id');
            $table->string('name',255);
            $table->string('blood_group',10);
            $table->string('nid_birth',255);
            $table->date('dob');
            $table->integer('age');
            $table->string('gender',20);
            $table->string('division',255);
            $table->string('district',255);
            $table->string('upazila',255);
            $table->string('uninon',255);
            $table->string('village',255);
            $table->string('contact',255);
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
