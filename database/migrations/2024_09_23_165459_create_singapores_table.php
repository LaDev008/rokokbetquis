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
        Schema::create('singapores', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('day');
            $table->boolean('is_toto')->nullable()->default(false);
            $table->string('first_prize')->nullable()->default("-");
            $table->string('second_prize')->nullable()->default("-");
            $table->string('third_prize')->nullable()->default("-");
            $table->string('starter_1')->nullable()->default("-");
            $table->string('starter_2')->nullable()->default("-");
            $table->string('starter_3')->nullable()->default("-");
            $table->string('starter_4')->nullable()->default("-");
            $table->string('starter_5')->nullable()->default("-");
            $table->string('starter_6')->nullable()->default("-");
            $table->string('starter_7')->nullable()->default("-");
            $table->string('starter_8')->nullable()->default("-");
            $table->string('starter_9')->nullable()->default("-");
            $table->string('starter_10')->nullable()->default("-");
            $table->string('consolation_1')->nullable()->default("-");
            $table->string('consolation_2')->nullable()->default("-");
            $table->string('consolation_3')->nullable()->default("-");
            $table->string('consolation_4')->nullable()->default("-");
            $table->string('consolation_5')->nullable()->default("-");
            $table->string('consolation_6')->nullable()->default("-");
            $table->string('consolation_7')->nullable()->default("-");
            $table->string('consolation_8')->nullable()->default("-");
            $table->string('consolation_9')->nullable()->default("-");
            $table->string('consolation_10')->nullable()->default("-");
            $table->string('winning_number_1')->nullable()->default("-");
            $table->string('winning_number_2')->nullable()->default("-");
            $table->string('winning_number_3')->nullable()->default("-");
            $table->string('winning_number_4')->nullable()->default("-");
            $table->string('winning_number_5')->nullable()->default("-");
            $table->string('winning_number_6')->nullable()->default("-");
            $table->string('additional_number')->nullable()->default("-");
            $table->string('result_toto')->nullable()->default("-");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('singapores');
    }
};
