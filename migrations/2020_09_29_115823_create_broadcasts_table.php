<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBroadcastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('broadcasts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("society_id");
            $table->foreign("society_id")->references("id")->on("societies");

            $table->unsignedBigInteger("created_by");
            $table->string("subject");
            $table->string("type");
            $table->string("send_to");
            $table->string("description");
            $table->string("attachment");
            $table->string("post_as");
            $table->string("send_message_by");
            $table->string("allow_comment");
            $table->string("display_commentall");
            $table->string("venue");

            $table->dateTime("event_time");
            $table->date("start_date");
            $table->date("meeting_date");
            $table->date("end_date");

            $table->dateTime("end_time");
            $table->dateTime("start_time");
           

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
        Schema::dropIfExists('broadcasts');
    }
}
