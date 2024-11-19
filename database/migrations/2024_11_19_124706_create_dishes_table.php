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
    Schema::create('dishes', function (Blueprint $table) {
        $table->id(); // PRI
        $table->string('name'); // Nombre del platillo
        $table->text('description')->nullable(); // Descripción opcional
        $table->string('image')->nullable(); // Imagen opcional
        $table->decimal('price', 10, 2); // Precio
        $table->unsignedBigInteger('section_id')->nullable(); // Relación con sección
        $table->timestamps(); // Incluye created_at y updated_at

        $table->foreign('section_id')->references('id')->on('sections')->onDelete('set null');
    });
}

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dishes');
    }
};
