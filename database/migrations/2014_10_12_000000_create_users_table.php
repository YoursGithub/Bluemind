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
        Schema::create('referral_codes', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->timestamps();

        });



        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('phone')->nullable();
            $table->string('email')->unique();
            $table->boolean('is_admin')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreignId('parent_referral_id')->nullable()->constrained('referral_codes')->onDelete('set null');
            $table->foreignId('sharing_referral_id')->nullable()->constrained('referral_codes')->onDelete('set null');
            $table->rememberToken();
            $table->timestamps();
        });


        
        Schema::create('bank_details', function (Blueprint $table) {
            $table->id();
            
            // bank 
            $table->string('account_name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('branch_name')->nullable();
            $table->string('ifsc_code')->nullable();

            // adhaar
            $table->string('adhaar_name')->nullable();
            $table->string('adhaar_number')->nullable();
            $table->text('address')->nullable();
            $table->string('pin_code')->nullable();
            $table->longText('adhaar_card_front')->nullable();
            $table->longText('adhaar_card_back')->nullable();

            // pan card
            $table->string('pan_number')->nullable();
            $table->string('pan_name')->nullable();
            $table->longText('pan_card')->nullable();

            //personal details
            $table->string('annual_income')->nullable();
            $table->longText('selfie')->nullable();

            //nominee 
            $table->string('nominee_name')->nullable();
            $table->string('nominee_phone')->nullable();
            $table->string('nominee_adhaar_number')->nullable();
            $table->longText('nominee_adhaar_card_front')->nullable();
            $table->longText('nominee_adhaar_card_back')->nullable();
            $table->longText('nominee_selfie')->nullable();

            //payment screenshot
            $table->longText('payment_screenshot')->nullable();


            $table->boolean('is_kyc_verified')->default(0);
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamps();
        });


        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referral_codes');
        Schema::dropIfExists('users');
        Schema::dropIfExists('bank_details');
    }
};
