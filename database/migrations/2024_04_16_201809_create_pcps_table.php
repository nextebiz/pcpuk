<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     */

    public function up(): void
    {
        Schema::create('pcps', function (Blueprint $table) {
            $table->id();
            $table->string('registrationNumber')->nullable(true);
            $table->string('taxStatus')->nullable(true);
            $table->string('taxDueDate')->nullable(true);
            $table->string('motStatus')->nullable(true);
            $table->string('make')->nullable(true);
            $table->string('yearOfManufacture')->nullable(true);
            $table->string('engineCapacity')->nullable(true);
            $table->string('co2Emissions')->nullable(true);
            $table->string('fuelType')->nullable(true);
            $table->string('markedForExport')->nullable(true);
            $table->string('colour')->nullable(true);
            $table->string('typeApproval')->nullable(true);
            $table->string('dateOfLastV5CIssued')->nullable(true);
            $table->string('motExpiryDate')->nullable(true);
            $table->string('wheelplan')->nullable(true);
            $table->string('monthOfFirstRegistration')->nullable(true);
            $table->string('title')->nullable(true);
            $table->string('name')->nullable(true);
            $table->string('email')->nullable(true);
            $table->string('phone')->nullable(true);
            $table->string('vehicle_value')->nullable(true);
            $table->string('owned_since')->nullable(true);
            $table->string('pcp_taken_out')->nullable(true);
            $table->string('dealers_name')->nullable(true);
            $table->string('lenders_name')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pcps');
    }
};
