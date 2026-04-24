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
    Schema::create('reviews', function (Blueprint $table) {
        $table->id();
        $table->integer('rating'); // النجوم من 1 لـ 5
        $table->text('comment')->nullable();

        // الشخص اللي دار التقييم (غالباً الكليان)
        $table->foreignId('reviewer_id')->constrained('users')->onDelete('cascade');

        // الشخص اللي خدا التقييم (غالباً اللفرور)
        $table->foreignId('reviewed_id')->constrained('users')->onDelete('cascade');

        // ربط التقييم بالعرض (Proposal) باش نعرفو أما خدمة هادي
        $table->foreignId('proposal_id')->nullable()->constrained()->onDelete('cascade');

        // إيلا عندك Trip (سفر) تقدر تخليه إيلا كان في الدياغرام
        $table->foreignId('trip_id')->nullable()->constrained()->onDelete('cascade');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
