<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('show_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('show_id')->constrained('movie_shows');
            $table->foreignId('reserved_by')->constrained('users');
            $table->smallInteger('no_of_seats');
            $table->float('paid_by_user');
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
        Schema::dropIfExists('show_bookings');
    }
}
