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
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(
                table: 'users',
                indexName: 'laporan_user_id'
            )->onDelete('cascade');
            $table->string('judulKejadian')->nullable();
            $table->string('nohp');
            $table->string('lokasi');
            $table->string('foto')->nullable();
            $table->boolean('urgensi')->default(true);
            $table->string('kronologi')->nullable();
            $table->boolean('keterangan')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Laporan');
    }
};
