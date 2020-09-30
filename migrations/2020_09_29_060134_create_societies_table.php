<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocietiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('societies', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("registration_no")->unique();
            $table->string("contact_person");
            $table->string("contact_person_email");
            $table->string("contact_person_contact");
            $table->string("plot_no");
            $table->string("address");
            $table->string("landmark");
            $table->string("pincode");
            $table->string("city");
            $table->string("state");
            $table->tinyInteger('status');
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
        Schema::dropIfExists('societies');
    }
}
