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
        Schema::table('macaus', function (Blueprint $table) {
            $table->string('result6')->nullable()->default('-')->after('result5');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('macaus', function (Blueprint $table) {
            $table->dropColumn('result6');
        });
    }
};
