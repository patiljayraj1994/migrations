<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("society_id");
            $table->foreign("society_id")->references("id")->on("societies");

            $table->unsignedBigInteger("faclility_id");
            $table->foreign("faclility_id")->references("id")->on("facilities");

            $table->unsignedBigInteger("unit_id");
            $table->foreign("unit_id")->references("id")->on("units");

            $table->date("book_date");
            $table->string("start_time");
            $table->string("end_time");
            $table->string("purpose");

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
        Schema::dropIfExists('bookings');
    }
}
