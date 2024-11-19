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
    Schema::create('tables', function (Blueprint $table) {
        $table->id(); // PRI
        $table->enum('status', ['Occupied', 'Pending', 'Available'])->default('Available'); // Estado de la mesa
        $table->decimal('total_price', 10, 2)->nullable()->default(0.00); // Precio total del pedido
        $table->text('dishes_description')->nullable(); // Descripción de los platillos
        $table->string('dishes_name')->nullable(); // Nombres de los platillos
        $table->timestamps(); // Incluye created_at y updated_at
    });
}



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables');
    }
};
