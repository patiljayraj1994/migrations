<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string("unit_name");
            $table->string("area");
            $table->string("owner_name");
            $table->string("intercom");
            $table->unsignedBigInteger("block_id");
            $table->foreign("block_id")->references("id")->on("blocks");
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
        Schema::dropIfExists('units');
    }
}
