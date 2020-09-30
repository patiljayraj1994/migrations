<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->string("visitor_name");
            $table->text("visitor_contact");
            $table->date("visit_date");
            $table->text("vehicle_no");
            $table->text("from");
            $table->text("reason");
            $table->integer("no_of_visitors")->default(null);
            $table->text("photo");
            $table->time("in_time");
            $table->time("out_time");

            $table->unsignedBigInteger("society_id");
            $table->foreign("society_id")->references("id")->on("societies");

            $table->unsignedBigInteger("scheduled_by");
            $table->foreign("scheduled_by")->references("id")->on("users");

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
        Schema::dropIfExists('visitors');
    }
}
