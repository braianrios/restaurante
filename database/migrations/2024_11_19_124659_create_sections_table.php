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
    Schema::create('sections', function (Blueprint $table) {
        $table->id(); // PRI
        $table->string('name'); // Nombre de la sección
        $table->string('image')->nullable(); // Imagen opcional
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
        Schema::dropIfExists('sections');
    }
};
