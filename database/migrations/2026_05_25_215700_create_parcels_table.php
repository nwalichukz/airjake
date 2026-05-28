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
        Schema::create('parcels', function (Blueprint $table) {
            $table->id();
            $table->string('tracking_id')->unique()->nullable();
            $table->string('sender_name');
            $table->string('sender_location');
            $table->string('sender_phone');
            $table->string('sender_email');
            $table->string('sender_address');
            $table->string('receiver_name');
            $table->string('receiver_email');
            $table->text('receiver_address');
            $table->string('receiver_phone');
            $table->timestamp('expected_arrival_date');
            $table->string('weight')->nullable();
            $table->decimal('cost', 10, 2);
            $table->string('status')->default('Order Confirmed'); // Order Confirmed, Picked by Courier, On The Way, Custom Hold, Delivered
            $table->string('current_location')->nullable();
            $table->decimal('latitude', 10, 7)->nullable(); // Default to Manila, Philippines map center
            $table->decimal('longitude', 10, 7)->nullable();
            $table->text('status_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parcels');
    }
};
