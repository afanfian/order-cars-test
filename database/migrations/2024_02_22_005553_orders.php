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
        Schema::create('orders', function (Blueprint $table) {
            $table->id()->nullable(false);
            $table->date('order_date')->nullable(false);
            $table->date('pickup_date')->nullable(false);
            $table->date('dropoff_date')->nullable(false);
            $table->string('pickup_location', 50)->nullable(false);
            $table->string('dropoff_location', 50)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
