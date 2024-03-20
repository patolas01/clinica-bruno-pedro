<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('formulario', function (Blueprint $table) {
            $table->id();
            $table->string('contacto');
            $table->string('nome');
            $table->string('email');
            $table->unsignedBigInteger('especialidade_id'); // Chave estrangeira
            $table->foreign('especialidade_id')->references('id')->on('especialidades');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulario');
    }
};
