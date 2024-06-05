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
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->unique();
            $table->string('degree')->nullable();
            $table->string('studyarea')->nullable();
            $table->string('startedyear')->nullable();
            $table->string('endedyear')->nullable();
            $table->string('profileurl')->nullable();
            $table->string('puburl')->nullable();
            $table->string('alumniimage', 300);
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
        Schema::dropIfExists('alumnis');
    }
};
