<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenanceSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenance_settings', function (Blueprint $table) {
            $table->id();
            $table->string("description");
            $table->integer("payment_sequence");
            $table->tinyInteger("gst");
            $table->tinyInteger("noc");
            $table->tinyInteger("penalty");

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
        Schema::dropIfExists('maintenance_settings');
    }
}
