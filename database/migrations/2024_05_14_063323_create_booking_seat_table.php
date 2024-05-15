<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('booking_seat', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('booking_id'); // Foreign key to bookings table
            $table->unsignedBigInteger('seat_id'); // Foreign key to seats table
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
            $table->foreign('seat_id')->references('id')->on('seats')->onDelete('cascade');
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('booking_seat');
    }
};
