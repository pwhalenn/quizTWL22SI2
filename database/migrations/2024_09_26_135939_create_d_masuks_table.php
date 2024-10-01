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
        Schema::create('d_masuks', function (Blueprint $table) {
            $table->id();
            $table->char("id_masuk", 6)->primary();
            $table->date("kd_masuk", 6)->foreign();
            $table->char("kd_barang_beli", 6)->foreign();
            $table->integer("jumlah");
            $table->integer("subtotal");
            $table->timestamps();

            $table->foreign('kd_masuk')
                ->references('kd_masuk')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_masuks');
    }
};
