<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_settings', function (Blueprint $table) {
            $table->id();
            $table->string("invoice_frequency");
            $table->date("account_start_date");
            $table->string("late_fee_type");
            $table->double("fixed_amount");
            $table->string("invoice_prefix");
            $table->integer("start_number");
            $table->tinyInteger("view_area")->default(1);
            $table->tinyInteger("view_period")->default(1);
            $table->tinyInteger("view_mobile")->default(1);
            $table->tinyInteger("bill_receipt_single_page")->default(1);
            $table->string("receipt_prefix");
            $table->integer("receipt_start_no");
            $table->string("voucher_prefix");
            $table->integer("voucher_start_no");



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
        Schema::dropIfExists('bill_settings');
    }
}
