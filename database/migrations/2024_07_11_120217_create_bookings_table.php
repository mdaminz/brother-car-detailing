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
        Schema::create('bookings', function (Blueprint $table) {

            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('car_model')->nullable();
            $table->string('license_plate')->nullable();
            $table->string('booking_date')->nullable();
            $table->string('time_slot')->nullable();
            $table->string('user_id')->nullable();
            $table->string('service_id')->nullable();

            $table->string('payment_status')->nullable();
            $table->string('complete_status')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
