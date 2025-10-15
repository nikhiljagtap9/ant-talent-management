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
        Schema::create('t_general', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('location')->nullable();
            $table->string('gender');
            $table->date('date_joined_agency')->nullable();
            $table->date('dob')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('nationality')->nullable();
            $table->string('mobile')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('country')->nullable();
            $table->string('talent_id')->nullable();
            $table->float('minimum_tariff', 8, 2)->nullable();
            $table->float('minimum_hourly_rate', 8, 2)->nullable();
            $table->float('minimum_day_rate', 8, 2)->nullable();
            $table->boolean('kids')->default(false);
            $table->boolean('allow_sms')->default(false);
            $table->boolean('email_icalendar')->default(false);
            $table->string('category')->nullable(); // Comma-separated
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_general');
    }
};
