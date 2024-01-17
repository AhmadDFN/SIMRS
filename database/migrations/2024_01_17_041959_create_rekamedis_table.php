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
        Schema::create('rekamedis', function (Blueprint $table) {
            $table->id();
            $table->integer("id_pasien");
            $table->integer("id_poli");
            $table->integer("id_dokter");
            $table->string("ket_dokter");
            $table->dateTime("tanggal_masuk");
            $table->dateTime("tanggal_keluar");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekamedis');
    }
};
