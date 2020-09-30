<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacilityAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facility_assets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("faclility_id");
            $table->foreign("faclility_id")->references("id")->on("facilities");
            $table->unsignedBigInteger("user_id");
            $table->string("name");
            $table->integer("quantity");
            $table->integer("unit_rate");
            $table->tinyInteger("paid")->default(0);
            $table->integer("charges");
            $table->tinyInteger("archive")->default(0);
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
        Schema::dropIfExists('facility_assets');
    }
}
