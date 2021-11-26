<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('user_id')->unsigned();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('fields_name');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('rpname')->nullable();
            $table->string('rpemail')->nullable();
            $table->string('description');
            $table->boolean('status')->default(false);
            $table->boolean('is_approved')->default(false);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('bookings');
    }
}
