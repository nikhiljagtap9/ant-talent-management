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
        Schema::create('t_finger_sizes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('t_general_id')->constrained('t_general')->onDelete('cascade');
            $table->string('left_thumb')->nullable();
            $table->string('right_thumb')->nullable();
            $table->string('left_index')->nullable();
            $table->string('right_index')->nullable();
            $table->string('left_middle')->nullable();
            $table->string('right_middle')->nullable();
            $table->string('left_ring')->nullable();
            $table->string('right_ring')->nullable();
            $table->string('left_little')->nullable();
            $table->string('right_little')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_finger_sizes');
    }
};
