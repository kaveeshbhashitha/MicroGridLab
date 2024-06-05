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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('pubtitle')->nullable();
            $table->string('pubname')->nullable();
            $table->string('pubjournal')->nullable();
            $table->string('pubdate')->nullable();
            $table->string('issue')->nullable();
            $table->string('volume')->nullable();
            $table->string('pages')->nullable();
            $table->string('puburl')->nullable();
            $table->text('description')->nullable();
            $table->string('pubimage', 300);
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
        Schema::dropIfExists('publications');
    }
};
