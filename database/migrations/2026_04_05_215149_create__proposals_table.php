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
        Schema::create('proposals', function (Blueprint $table) {
    $table->id();
    $table->float('price');
    $table->text('note')->nullable();
    $table->string('status')->default('pending');
    $table->string('vehicle_type')->nullable();
    $table->foreignId('livreur_id')->constrained('users')->onDelete('cascade');
    $table->foreignId('offer_id')->constrained()->onDelete('cascade');

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_proposals');
    }
};
