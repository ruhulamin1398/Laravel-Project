<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('group_id');
            $table->string('nid_birth');
            $table->date('dob');
            $table->integer('age');
            $table->string('gender');
            $table->unsignedBigInteger('division');
            $table->unsignedBigInteger('district');
            $table->unsignedBigInteger('upazila');
            $table->unsignedBigInteger('union');
            $table->unsignedBigInteger('village');
            $table->string('contact');
            $table->timestamps();

          $table->foreign('group_id')->references('id')->on('groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donors');
    }
}
