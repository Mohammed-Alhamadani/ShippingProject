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
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('container_id')->constrained('containers')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('uuid');
            $table->string('invoice_number')->nullable();
            $table->float('handling_fee')->nullable();
            $table->float('delivery_fee')->nullable();
            $table->float('storage_fee')->nullable();
            $table->float('internal_delivery_fee')->nullable();
            $table->float('insurance_fee')->nullable();
            $table->float('packaging_fee')->nullable();
            $table->float('shipping_fee')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
};
