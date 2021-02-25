<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderconfirmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_confirms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carpenter_id')->references('id')->on('carpenters')->onDelete('cascade');
            $table->foreignId('item_id')->references('id')->on('items')->onDelete('cascade');
            $table->string('qty');
            $table->date('due_date')->nullable()->default(null);
            $table->date('confirm_date')->nullable()->default(null);
            $table->foreignId('status_id')->references('id')->on('statuses')->onDelete('cascade');
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
        Schema::dropIfExists('order_confirms');
    }
}
