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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->char("kd_barang", 6)->unique();
            $table->text("nama_barang", 25)->unique();
            $table->text("satuan", 10);
            $table->integer("harga_jual");
            $table->integer("harga_beli");
            $table->integer("stok");
            $table->text("status", 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
