<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nompro',125);
            $table->text('descpro');
            $table->decimal('prepro',10,2);
            $table->integer('stock_disponible');
            $table->integer('stock_minimo');
            $table->enum('estpro',['activo','inactivo','borrador']);
            $table->string('certipro',100);
            $table->string('imgpro',120);
            $table->foreignId('codcatg')->constrained('categorias')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
