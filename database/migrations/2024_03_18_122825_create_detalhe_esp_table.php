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
        Schema::create('detalhe_esp', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('imagem');
            $table->text('descriçao');
            $table->unsignedBigInteger('especialidade_id'); // Chave estrangeira
            $table->foreign('especialidade_id')->references('id')->on('especialidade');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalhe_esp');
    }
};
