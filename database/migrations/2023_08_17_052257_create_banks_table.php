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
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->string('_id')->unique();
            $table->string('image');
            $table->string('colour');
            $table->string('Bank_Name');
            $table->string('toll_free_num');
            $table->string('mini_stat_num');
            $table->string('mini_stat_sms');
            $table->string('cust_care_num');
            $table->string('sms_inquiry');
            $table->string('net_banking_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banks');
    }
};
