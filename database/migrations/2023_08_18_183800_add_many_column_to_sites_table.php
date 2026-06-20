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
        Schema::table('sites', function (Blueprint $table) {
            $table->string('minimal_bet')->nullable();
            $table->string('minimal_deposit')->nullable();
            $table->string('minimal_withdraw')->nullable();
            $table->string('bbfs')->nullable();
            $table->string('top_promo')->nullable();
            $table->string('service')->nullable();
            $table->string('markets')->nullable();
            $table->string('bet_type')->nullable();
            $table->string('deposit_bank')->nullable();
            $table->string('deposit_ewallet')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sites', function (Blueprint $table) {
            $table->dropColumn('minimal_bet');
            $table->dropColumn('minimal_deposit');
            $table->dropColumn('minimal_withdraw');
            $table->dropColumn('bbfs');
            $table->dropColumn('top_promo');
            $table->dropColumn('service');
            $table->dropColumn('markets');
            $table->dropColumn('bet_type');
            $table->dropColumn('deposit_bank');
            $table->dropColumn('deposit_ewallet');
        });
    }
};
