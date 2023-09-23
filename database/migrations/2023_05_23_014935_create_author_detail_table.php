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
        Schema::create('author_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id')->constrained('author')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('short_description', 100);
            $table->string('about', 255);
            $table->string('location', 50);
            $table->string('website_url', 100);
            $table->string('website_domain', 100);
            $table->string('instagram_url', 100);
            $table->string('instagram_id', 100);
            $table->string('email_url', 100);
            $table->string('email_address', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('author_detail');
    }
};
