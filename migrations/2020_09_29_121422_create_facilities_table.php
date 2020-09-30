<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilities', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("available_from");
            $table->string("available_to");
            $table->string("minimum_booking_duration");
            $table->string("maximum_booking_duration");
            $table->integer("residential_charges");
            $table->integer("commercial_charges");
            $table->string("gap");
            $table->tinyInteger("auto_cancel")->default(1);
            $table->tinyInteger("one_booking_per_day")->default(0);
            $table->tinyInteger("archive")->default(0);
            $table->longText("instructions");

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
        Schema::dropIfExists('facilities');
    }
}
