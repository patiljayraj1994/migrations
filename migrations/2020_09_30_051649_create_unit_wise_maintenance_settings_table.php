<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitWiseMaintenanceSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_wise_maintenance_settings', function (Blueprint $table) {
            $table->id();

            $table->double("charges");

            $table->unsignedBigInteger("unit_id");
            $table->foreign("unit_id")->references("id")->on("units");

            $table->unsignedBigInteger("maintenance_setting_id");
            $table->foreign("maintenance_setting_id")->references("id")->on("maintenance_settings");

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
        Schema::dropIfExists('unit_wise_maintenance_settings');
    }
}
