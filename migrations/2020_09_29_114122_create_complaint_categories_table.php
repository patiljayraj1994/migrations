<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaint_categories', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->unsignedBigInteger("level_one_assign_id");
            $table->unsignedBigInteger("level_two_assign_id");
            $table->unsignedBigInteger("level_three_assign_id");
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
        Schema::dropIfExists('complaint_categories');
    }
}
