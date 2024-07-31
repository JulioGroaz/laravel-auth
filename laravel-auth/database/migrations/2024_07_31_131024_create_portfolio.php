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
        Schema::create('portfolio', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255); // Titolo del progetto
            $table->text('description'); // Descrizione del progetto
            $table->string('url', 255); // URL del progetto
            $table->string('image', 255)->nullable(); // Immagine del progetto (può essere nullo)
            $table->string('technologies', 255); // Tecnologie utilizzate
            $table->timestamps(); // created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolio');
    }
};
