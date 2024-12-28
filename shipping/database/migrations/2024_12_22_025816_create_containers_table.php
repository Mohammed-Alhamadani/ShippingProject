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
        Schema::create('containers', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->foreignId('source_port_id')->constrained('ports');
            $table->foreignId('destination_port_id')->constrained('ports');
            $table->date('shipment_date');
            $table->date('arrival_date');
            $table->string('size');
            $table->integer('cubic_volume');
            $table->string('shipping_company');
            $table->string('container_number');
            $table->string('bill_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('containers');
    }
};
