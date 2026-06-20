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
        Schema::table('event_comments', function (Blueprint $table) {
            $table->unsignedBigInteger('winner_list_id')->nullable();
            $table->foreign('winner_list_id')->references('id')->on('winner_lists')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('event_comments', function (Blueprint $table) {
            $table->dropForeign(['winner_list_id']);
            $table->dropColumn('winner_list_id');
        });
    }
};
