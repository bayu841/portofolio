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
        Schema::create('riwayat_buku', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('buku_id');
            $table->timestamp('viewed_at')->default(now());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */ 
    public function down(): void
    {
        Schema::dropIfExists('riwayat_buku');
    }
};