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
        Schema::create('predict_markets', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('alias')->nullable();
            $table->string('image')->nullable();
            $table->string('bbfs')->nullable();
            $table->string('angka_main')->nullable();
            $table->string('colok_bebas')->nullable();
            $table->string('colok_macau')->nullable();
            $table->string('shio')->nullable();
            $table->string('twin')->nullable();
            $table->string('open')->nullable();
            $table->string('close')->nullable();
            $table->string('dua_d1')->nullable();
            $table->string('dua_d2')->nullable();
            $table->string('dua_d3')->nullable();
            $table->string('dua_d4')->nullable();
            $table->string('dua_d5')->nullable();
            $table->string('dua_d6')->nullable();
            $table->string('dua_d7')->nullable();
            $table->string('dua_d8')->nullable();
            $table->string('dua_d9')->nullable();
            $table->string('dua_d10')->nullable();
            $table->text('article')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('predict_markets');
    }
};
