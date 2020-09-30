<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitTenetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_tenents', function (Blueprint $table) {
            $table->id();
            $table->date("agreement_date");
            $table->date("agreement_expiry_date");
            $table->string("type");
            $table->string("rent_agreement");
            $table->string("auth_form");
            $table->string("owner_consent");
            $table->string("tenant_consent");
            $table->string("noc_issue");
            $table->string("noc_format");
            $table->string("noc_type");
            $table->unsignedBigInteger("unit_id");
            $table->foreign("unit_id")->references("id")->on("units");

            $table->unsignedBigInteger("unit_member_id");
            $table->foreign("unit_member_id")->references("id")->on("unit_members");
        
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
        Schema::dropIfExists('unit_tenets');
    }
}
