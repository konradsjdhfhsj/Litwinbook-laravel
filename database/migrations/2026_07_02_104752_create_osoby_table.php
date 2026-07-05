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
        Schema::create('osoby', function (Blueprint $table) {
            $table->id();
            $table->string('imie')->nullable();
            $table->string('nazwisko')->nullable();
            $table->integer('wiek')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('avatar');

            // Data utworzenia konta
            $table->timestamp('data_powstania_konta')->useCurrent();

            // IP utworzenia konta
            $table->ipAddress('ip_utwozenia_konta')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('osoby');
    }
};