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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string ('receiver_name');
            $table->string ('receiver_contact_number');
            $table->string ('receiver_address');
            $table->string ('shipment_receive_date');
            $table->string ('shipment_receive_time');
            $table->string ('shipment_weight');
            $table->string ('shipment_price');






            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
