<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_vehicles', function (Blueprint $table) {
            $table->id();
            $table->string("vehicle_no");
            $table->string("model");
            $table->string("wheel");
            $table->string("sticker_no");
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
        Schema::dropIfExists('unit_vehicles');
    }
}
