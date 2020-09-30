<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_staffs', function (Blueprint $table) {
            $table->id();
            $table->string("fname");
            $table->string("lname");
            $table->string("gender");
            $table->date("dob");
            $table->string("contact");
            $table->string("address");
            
            $table->string("photo");
            $table->string("id_proof");
            $table->tinyInteger("status");
            $table->unsignedBigInteger("unit_id");
            $table->foreign("unit_id")->references("id")->on("units");
            $table->unsignedBigInteger("society_id");
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
        Schema::dropIfExists('unit_staffs');
    }
}
