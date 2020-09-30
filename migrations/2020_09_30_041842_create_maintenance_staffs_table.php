<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenanceStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenance_staffs', function (Blueprint $table) {
            $table->id();
            $table->string("fname");
            $table->string("lname");
            $table->string("gender");
            $table->string("email");
            $table->string("role");
            
            $table->string("qualification");
            $table->string("vehicle_no");
            $table->string("address");
            $table->string("identity_proof");
            $table->string("address_proof");
            $table->date("dob");
            $table->string("photo");
            $table->string("agency_name");
            $table->integer("salary");
            $table->tinyInteger("status")->default(1);

            $table->unsignedBigInteger("society_id");
            $table->foreign("society_id")->references("id")->on("societies");

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
        Schema::dropIfExists('maintenance_staffs');
    }
}
