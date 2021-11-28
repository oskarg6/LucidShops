<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->float('total_price');
            $table->unsignedBigInteger('shop_id');
            $table->unsignedBigInteger('shop_user_id');
            $table->timestamps();

            $table->foreign('shop_id')->references('id')->on('shop');
            $table->foreign('shop_user_id')->references('id')->on('shop_user');
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
            $table->dropForeign('shop_id');
            $table->dropForeign('product_shop_user_id');
        });

        Schema::dropIfExists('order');
    }
}
