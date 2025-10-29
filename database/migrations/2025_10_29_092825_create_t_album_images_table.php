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
        Schema::create('t_album_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('t_general_id')->constrained('t_general')->onDelete('cascade');
            $table->foreignId('album_id')->constrained('t_albums')->onDelete('cascade');
            $table->unsignedBigInteger('image_id'); // from t_images table
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_album_images');
    }
};
