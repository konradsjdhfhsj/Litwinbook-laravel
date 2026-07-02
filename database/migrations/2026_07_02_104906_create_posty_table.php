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
        Schema::create('posty', function (Blueprint $table) {
            $table->id();
            $table->string('autor')->nullable();
            $table->string('tresc')->nullable();
            $table->string('data')->useCurrent();
            $table->string('like')->nullable();
            $table->string('komentarz')->nullable();
            $table->string('altor_komentarza')->nullable();
            $table->string('post_id')->nullable(); //OPCJONALNIE POD ROWZUJ !!!!!
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posty');
    }
};
