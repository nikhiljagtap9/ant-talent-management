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
        Schema::create('t_user_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('t_general_id')->constrained('t_general')->onDelete('cascade');

            // Passport Details
            $table->string('passport_number')->nullable();
            $table->date('passport_issue_date')->nullable();
            $table->date('passport_expiry_date')->nullable();
            $table->string('passport_country')->nullable();
            $table->string('passport_file')->nullable();

            // Visa Details
            $table->string('visa_number')->nullable();
            $table->date('visa_issue_date')->nullable();
            $table->date('visa_expiry_date')->nullable();
            $table->string('visa_country')->nullable();
            $table->string('visa_file')->nullable();

            // Contract Details
            $table->date('contract_initial_date')->nullable();
            $table->date('contract_expiry_date')->nullable();
            $table->string('contract_file')->nullable();

            // License Details
            $table->date('license_expiry_date')->nullable();
            $table->string('license_file')->nullable();

            // Photos
            $table->string('photo_file')->nullable();
            $table->string('photo_document_file')->nullable();

            // Other
            $table->string('other_comment')->nullable();
            $table->string('other_file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_user_documents');
    }
};
