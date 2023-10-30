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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->text('summary');
            $table->string('cover',255);
            $table->integer('duration_minutes');
            $table->foreignId('director_id')->constrained('persons');
            $table->foreignId('producer_id')->constrained('persons');
            $table->integer('annee');
            $table->integer('rating');
            $table->string('lien_video');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
