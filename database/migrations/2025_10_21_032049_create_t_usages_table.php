<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('t_usages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('t_general_id')->constrained('t_general')->onDelete('cascade');
            $table->string('event_type')->nullable();
            $table->string('usage_type')->nullable();
            $table->string('client')->nullable();
            $table->string('product')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('booker')->nullable();
            $table->string('exclusivity')->nullable();
            $table->string('board')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('usages');
    }
};
