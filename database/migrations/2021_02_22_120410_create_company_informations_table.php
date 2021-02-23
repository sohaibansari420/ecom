<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_informations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name')->nullable();
            $table->string('buisness_type')->nullable();
            $table->integer('company_id')->nullable();
            $table->string('location')->nullable();
            $table->string('buisness_regestration_no')->nullable();
            $table->string('year_established')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('credit_terms')->nullable();
            $table->string('discount_rate')->nullable();
            $table->string('currency')->nullable();
            $table->text('url')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('fax_no')->nullable();
            $table->text('address_1')->nullable();
            $table->text('address_2')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('state_id')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('prefer_courier')->nullable();
            $table->string('courier_acc_no')->nullable();
            $table->text('document_upload')->nullable();
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
        Schema::dropIfExists('company_informations');
    }
}
