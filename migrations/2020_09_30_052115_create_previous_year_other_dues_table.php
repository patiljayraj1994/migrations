<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreviousYearOtherDuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previous_year_other_dues', function (Blueprint $table) {
            $table->id();

            $table->double("charges");

            $table->unsignedBigInteger("unit_id");
            $table->foreign("unit_id")->references("id")->on("units");

            $table->unsignedBigInteger("account_type_id");
            $table->foreign("account_type_id")->references("id")->on("account_types");

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
        Schema::dropIfExists('previous_year_other_dues');
    }
}
