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
        Schema::create('rendezvous', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->index('patient_id');
            $table->foreignId('patient_id')->references('id')->on('users')->onDelete(('cascade'));
            $table->index('doctor_id');
            $table->foreignId('doctor_id')->references('id')->on('users')->onDelete(('cascade'));
            $table->string('typeconsultation');
            $table->string('motif')->nullable();
            $table->string('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendezvous');
    }
};
