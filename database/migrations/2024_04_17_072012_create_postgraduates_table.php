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
        Schema::create('postgraduates', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('email')->nullable();
            $table->string('degree')->nullable();
            $table->string('studyarea')->nullable();
            $table->string('startedyear')->nullable();
            $table->string('endedyear')->nullable();
            $table->string('profileurl')->nullable();
            $table->string('image', 300);
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
        Schema::dropIfExists('postgraduates');
    }
};
