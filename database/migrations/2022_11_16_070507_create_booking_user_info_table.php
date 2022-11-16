<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingUserInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_user_info', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained('show_bookings');
            $table->foreignId('selected_seat')->constrained('seatings');
            $table->string('name', 255);
            $table->enum('gender', ['Male', 'Female']);
            $table->smallInteger('age');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_user_info');
    }
}
