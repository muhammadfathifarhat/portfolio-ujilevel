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
        Schema::create('project_image', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained('project')->cascadeOnUpdate()->cascadeOnDelete();
            $table->enum('type', ['Video', 'Image']);
            $table->string('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_image');
    }
};
