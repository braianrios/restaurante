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
    Schema::create('notifications', function (Blueprint $table) {
        $table->id(); // PRI
        $table->integer('table_number'); // Número de mesa relacionada
        $table->string('message')->nullable(); // Mensaje opcional
        $table->enum('status', ['Unread', 'Read'])->default('Unread'); // Estado
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
        Schema::dropIfExists('notifications');
    }
};
