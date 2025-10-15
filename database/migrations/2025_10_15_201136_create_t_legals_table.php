<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('t_legals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('t_general_id')->constrained('t_general')->onDelete('cascade');

            // Legal Info
            $table->string('legal_first_name')->nullable();
            $table->string('legal_middle_name')->nullable();
            $table->string('legal_last_name')->nullable();
            $table->string('company_name')->nullable();
            $table->boolean('is_non_resident')->default(false);
            $table->boolean('is_freelancer')->default(false);
            $table->string('id_ss_number')->nullable();
            $table->string('tax_number')->nullable();
            $table->string('accounting_number')->nullable();
            $table->string('insurance_number')->nullable();
            $table->string('talent_tax_percent')->nullable();
            $table->boolean('own_tax_responsible')->default(false);
            $table->string('talent_commission_percent')->nullable();
            $table->string('account_balance')->nullable();
            $table->string('reserve_amount')->nullable();
            $table->string('credit_status')->nullable();

            // Contract Details
            $table->string('contract_name')->nullable();
            $table->date('contract_signed_on')->nullable();
            $table->date('contract_expires_on')->nullable();
            $table->boolean('contract_is_back')->default(false);

            // Work Permit Details
            $table->string('work_permit')->nullable();
            $table->string('permit_country')->nullable();
            $table->date('permit_issued_on')->nullable();
            $table->date('permit_expires_on')->nullable();
            $table->boolean('stop_payments')->default(false);
            $table->text('stop_payments_notes')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('t_legals');
    }
};

