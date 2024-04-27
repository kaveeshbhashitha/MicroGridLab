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
        Schema::create('coordinators', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('code')->nullable();
            $table->string('telephone');
            $table->string('department')->nullable();
            $table->string('faculty')->nullable();
            $table->string('university')->nullable();
            $table->string('profileurl');
            $table->string('image', 300);
            $table->string('status')->default('unpublish');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coordinators');
    }
};