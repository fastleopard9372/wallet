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
        Schema::create('Withraw', function (Blueprint $table) {
            $table->id();
            $table->integer('wallet_id')->default(0);
            $table->string('payment_method')->default('');
            $table->integer('statue')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Withraw');
    }
};
