<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('wallet_control', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('wallet_action');
            $table->integer('wallet_cnt_id')->default(0);
            $table->float('income')->default(0);
            $table->integer('date')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallet_control');
    }
};
