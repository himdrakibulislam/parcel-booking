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
            $table->string ('Sender_name');
            $table->string ('Receiver_name');
            $table->string ('From');
            $table->string ('To');
            $table->string ('Date');
            $table->string ('Payment');
            $table->string ('Booking_ID');
            $table->string ('status')->default('Active');



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
