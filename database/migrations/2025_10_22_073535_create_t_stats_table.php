<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('t_stats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('t_general_id')->constrained('t_general')->onDelete('cascade');

            $table->date('last_measured_date')->nullable();

            // Body Measurements
            $table->string('height')->nullable();
            $table->string('bust')->nullable();
            $table->string('waist')->nullable();
            $table->string('hips')->nullable();
            $table->string('cup')->nullable();
            $table->string('shoe')->nullable();
            $table->string('dress_top')->nullable();
            $table->string('bottom')->nullable();
            $table->string('eye_color')->nullable();
            $table->string('hair_color')->nullable();
            $table->string('hair_length')->nullable();
            $table->string('hair_type')->nullable();
            $table->string('body_type')->nullable();
            $table->string('ethnic')->nullable();
            $table->string('head')->nullable();
            $table->string('collar')->nullable();
            $table->string('gloves')->nullable();
            $table->string('wrist_size')->nullable();
            $table->string('inseam')->nullable();
            $table->string('outseam')->nullable();
            $table->string('sleeve')->nullable();
            $table->string('custom_shoe_size')->nullable();
            $table->string('weight')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('t_stats');
    }
};
