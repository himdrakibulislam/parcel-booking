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
            $table->string('booking_id');
            $table->integer('user_id');
            $table->integer('rider_id');
            $table->string('status');
            $table->integer('viewing_pin')->nullable();
            $table->string('payment_type')->nullable();
            $table->boolean('is_confirm')->nullable();
            $table->string('tran_id')->nullable();
            
            $table->string('time_slot')->nullable();

            $table->string('sender_name');
            $table->string('sender_email');
            $table->string('sender_contact');
            $table->string('sender_location');
            $table->text('sender_address');

            $table->string('receiver_name');
            $table->string('receiver_email');
            $table->string('receiver_contact');
            $table->string('receiver_location');
            $table->text('receiver_address');

            $table->integer('quantity')->nullable();
            $table->boolean('special_package')->nullable();
            $table->text('description')->nullable();
            $table->date('date')->nullable();
            $table->string('category_type')->nullable();
            $table->integer('weight_range');
            $table->integer('price')->nullable();
            $table->string('vehicle')->nullable();
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
