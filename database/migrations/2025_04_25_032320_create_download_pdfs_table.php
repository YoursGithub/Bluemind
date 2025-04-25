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
        Schema::create('download_pdfs', function (Blueprint $table) {
            
            $table->id();

            $table->text('business_proposal')->nullable() ;

            $table->text('referral_plan')->nullable() ;

            $table->text('trading_investment')->nullable() ;

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('download_pdfs');
    }
};
