<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('voucherno');
            $table->string('totalamount');
            $table->string('totalitem');
            $table->date('orderdate');
            $table->text('deliveryaddress');
            $table->integer('status');
            $table->foreignId('shipping_id')->reference('id')->on('shippings')->onDelete('cascade');
            $table->foreignId('user_id')->reference('id')->on('users')->onDelete('cascade');
            $table->foreignId('item_id')->reference('id')->on('items')->onDelete('cascade');
            $table->foreignId('carpenter_id')->reference('id')->on('carpenters')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('orders');
    }
}
