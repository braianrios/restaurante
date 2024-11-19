<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('order_items', function (Blueprint $table) {
        $table->id(); // PRI
        $table->unsignedBigInteger('order_id')->nullable(); // Relación con pedido
        $table->unsignedBigInteger('dish_id')->nullable(); // Relación con platillo
        $table->integer('quantity')->default(1); // Cantidad por defecto 1
        $table->timestamps(); // Incluye created_at y updated_at

        $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        $table->foreign('dish_id')->references('id')->on('dishes')->onDelete('set null');
    });
}



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
};
