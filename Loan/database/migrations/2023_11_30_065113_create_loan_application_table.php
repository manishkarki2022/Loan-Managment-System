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
        Schema::create('loan_application', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('amount');
            $table->string('bank');
            $table->string('account');
            $table->string('loan_type');
            $table->string('installment_count');
            $table->string('installment_payable');
            $table->string('amount_payable');
            $table->string('date_applied');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_application');
    }
};
