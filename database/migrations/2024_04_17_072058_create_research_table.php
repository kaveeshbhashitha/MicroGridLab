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
        Schema::create('research', function (Blueprint $table) {
            $table->id();
            $table->string('researchtitle');
            $table->string('researchername');
            $table->string('instructer');
            $table->string('otherresearchers')->nullable();
            $table->string('researchdate');
            $table->string('issue')->nullable();
            $table->string('volume')->nullable();
            $table->string('pages')->nullable();
            $table->string('puburl');
            $table->text('description');
            $table->string('researchimage', 300);
            $table->string('rate');
            $table->string('status')->default('unpublish');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('research');
    }
};
