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
        Schema::create('sydneys', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('day', 100);
            $table->string('first_result', 100)->nullable()->default("-");
            $table->string('second_result', 100)->nullable()->default("-");
            $table->string('third_result', 100)->nullable()->default("-");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sydneys');
    }
};
