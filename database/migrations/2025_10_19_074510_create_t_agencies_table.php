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
        Schema::create('t_agencies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('t_general_id')->constrained('t_general')->onDelete('cascade');
            $table->string('agency_name')->nullable();
            // $table->string('country')->nullable();
            // $table->string('city')->nullable();
            // $table->string('phone')->nullable();
            $table->decimal('mother_agency_percentage', 8, 2)->nullable();
            $table->string('assigned_on')->nullable(); // Gross Rate, Talent Gross, etc.
            $table->boolean('mother_agency')->default(false);
            $table->boolean('other_mother_agency')->default(false);
            $table->boolean('placement')->default(false);
            $table->boolean('contract_received')->default(false);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_agencies');
    }
};
