<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTankersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tankers', function (Blueprint $table) {
            $table->id();
            $table->string("supplier_name");
            $table->text("tanker_no");
            $table->text("tanker_capacity");
            $table->text("tanker_rate");
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
        Schema::dropIfExists('tankers');
    }
}
