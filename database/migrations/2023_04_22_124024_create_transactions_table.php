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
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('travel_packages_id');
            $table->integer('users_id')->nullable();
            $table->integer('additional_visa');
            $table->integer('transaction_total');
            $table->string('transaction_status');
            // IN_CARD, PENDING, SUCCESS, CANCEL, FAILED
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
