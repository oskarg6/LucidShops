<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductProductProviderCompanyRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product__product_provider_company', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('provider_company_id');
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('product');
            $table->foreign('provider_company_id')->references('id')->on('product_provider_company');
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
            $table->dropForeign('product_id');
            $table->dropForeign('provider_company_id');
        });
        Schema::dropIfExists('product__product_provider_company');
    }
}
