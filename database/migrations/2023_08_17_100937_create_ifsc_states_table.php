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
        Schema::create('ifsc_states', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ifsc_bank_id');
            $table->foreign('ifsc_bank_id')->references('id')->on('ifsc_banks');
            $table->string('state_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ifsc_states');
    }
};
