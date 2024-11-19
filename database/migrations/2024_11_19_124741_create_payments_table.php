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
    Schema::create('payments', function (Blueprint $table) {
        $table->id(); // PRI
        $table->unsignedBigInteger('order_id'); // Relación con pedidos
        $table->enum('method', ['Cash', 'Credit Card', 'Online']); // Método de pago
        $table->decimal('amount', 10, 2); // Monto del pago
        $table->string('transaction_id')->nullable(); // ID de transacción para pagos online
        $table->timestamps(); // Incluye created_at y updated_at

        $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade'); // Elimina los pagos si el pedido se elimina
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
