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
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary key with auto-increment
            $table->string('kode_booking')->unique(); // Unique booking code
            $table->string('name'); // Customer name
            $table->string('no_hp'); // Contact number
            $table->string('alamat'); // Address
            $table->date('tgl_booking'); // Booking date
            $table->date('tgl_datang'); // Arrival date
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
