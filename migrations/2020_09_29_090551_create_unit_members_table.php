<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_members', function (Blueprint $table) {
            $table->id();
            $table->string("fname");
            $table->string("lname");
            $table->string("email");
            $table->string("contact");
            $table->string("membership_type");
            $table->string("living_status");
            $table->string("address");
            $table->string("id_proof");
            $table->string("pol_verify");
            $table->string("mod_note");
            $table->tinyInteger("status")->default(1);
            $table->unsignedBigInteger("unit_id");
            $table->foreign("unit_id")->references("id")->on("units");
            $table->unsignedBigInteger("society_id");
            $table->unsignedBigInteger("user_id");
            

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
        Schema::dropIfExists('unit_members');
    }
}
