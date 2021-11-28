<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactPersonProviderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_person_provider', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('function');
            $table->unsignedBigInteger('product_provider_company_id');
            $table->timestamps();

            $table->foreign('product_provider_company_id')->references('id')->on('product_provider_company');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contact_person_provider', function (Blueprint $table) {
            $table->dropForeign('product_provider_company_id');
        });

        Schema::dropIfExists('contact_person_provider');
    }
}
