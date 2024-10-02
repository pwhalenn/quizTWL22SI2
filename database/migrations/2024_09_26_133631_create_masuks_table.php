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
        Schema::create('masuks', function (Blueprint $table) {
            $table->id();
            $table->char("kd_masuk", 6)->unique();
            $table->date("tgl_masuk");
            $table->foreignId("user_id")->constrained('users')->nullable();
            $table->char("kd_supplier", 6)->foreign();
            $table->integer("total_masuk")->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masuks');
    }
};
