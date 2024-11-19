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
    Schema::create('orders', function (Blueprint $table) {
        $table->id(); // PRI
        $table->integer('table_number'); // Número de mesa
        $table->enum('status', ['Pending', 'In Progress', 'Completed'])->default('Pending'); // Estado
        $table->decimal('total_price', 10, 2)->nullable()->default(0.00); // Precio total
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
        Schema::dropIfExists('orders');
    }
};
