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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('company_id')->constrained()->onDelete('cascade');
            $table->string('transmission');
            $table->string('model');
            $table->string('engine');
            $table->string('fuel');
            $table->string('chasis_no');
            $table->string('registration_year');
            $table->string('doors');
            $table->string('model_code');
            $table->string('weight');
            $table->string('seats');
            $table->string('steering');
            $table->string('location');
            $table->string('color');
            $table->longText('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
