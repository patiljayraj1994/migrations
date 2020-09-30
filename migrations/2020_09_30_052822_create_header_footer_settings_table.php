<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeaderFooterSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('header_footer_settings', function (Blueprint $table) {
            $table->id();
            $table->string("bill_title");
            $table->text("bill_footer");
            $table->string("invoice_title");
            $table->text("invoice_footer");

            $table->string("receipt_title");
            $table->text("receipts_footer");

            $table->string("voucher_title");
            $table->text("voucher_footer");

            $table->string("fund_title");
            $table->text("fund_footer");

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
        Schema::dropIfExists('header_footer_settings');
    }
}
