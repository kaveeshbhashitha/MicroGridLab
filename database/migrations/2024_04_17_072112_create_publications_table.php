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
            $table->string('pubtitle');
            $table->string('pubname');
            $table->string('pubjournal');
            $table->string('pubdate');
            $table->string('issue')->nullable();
            $table->string('volume')->nullable();
            $table->string('pages')->nullable();
            $table->string('puburl');
            $table->text('description');
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
