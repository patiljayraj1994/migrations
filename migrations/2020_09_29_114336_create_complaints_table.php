<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->string("nature");
            $table->string("type");
            $table->string("title");
            $table->string("description");
            $table->string("complaint_file");
            $table->string("status");
            
            $table->unsignedBigInteger("unit_id");
            $table->foreign("unit_id")->references("id")->on("units");

            $table->unsignedBigInteger("assigned_to");
            $table->unsignedBigInteger("assigned_by");
            $table->unsignedBigInteger("raised_by");

            $table->unsignedBigInteger("society_id");
            $table->foreign("society_id")->references("id")->on("societies");

            $table->unsignedBigInteger("category_id");
            $table->foreign("category_id")->references("id")->on("complaint_categories");

            $table->unsignedBigInteger("area_id");
            $table->foreign("area_id")->references("id")->on("complaint_areas");
            
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
        Schema::dropIfExists('complaints');
    }
}
