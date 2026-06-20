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
        Schema::create('macaus', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('day')->nullable();
            $table->date('date')->nullable();
            $table->string('result1')->nullable()->default('-');
            $table->string('result2')->nullable()->default('-');
            $table->string('result3')->nullable()->default('-');
            $table->string('result4')->nullable()->default('-');
            $table->string('result5')->nullable()->default('-');
            $table->string('last_updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('macaus');
    }
};
