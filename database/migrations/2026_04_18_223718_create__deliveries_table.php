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
        Schema::create('deliveries', function (Blueprint $table) {
    $table->id();
    $table->foreignId('offer_id')->constrained()->onDelete('cascade');
    $table->foreignId('livreur_id')->constrained('users')->onDelete('cascade');
    $table->decimal('final_price', 10, 2);

    $table->enum('status', ['pending', 'en_route', 'delivered'])->default('pending');
    $table->timestamp('started_at')->nullable(); 
    $table->timestamp('completed_at')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
