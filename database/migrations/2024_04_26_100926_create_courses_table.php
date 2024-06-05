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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('coursetitle')->nullable();
            $table->string('coursename');
            $table->string('faculty')->nullable();
            $table->string('department')->nullable();
            $table->string('university')->nullable();
            $table->string('duration')->nullable();
            $table->string('deliverymethod')->nullable();
            $table->string('coursefee')->nullable();
            $table->string('nextintake')->nullable();
            $table->text('eligibility01')->nullable();
            $table->text('eligibility02')->nullable();
            $table->text('eligibility03')->nullable();
            $table->text('eligibility04')->nullable();
            $table->text('eligibility05')->nullable();
            $table->text('eligibility06')->nullable();
            $table->string('applyonlineurl')->nullable();
            $table->string('weburl')->nullable();
            $table->string('moredetailsurl')->nullable();
            $table->string('telephone')->nullable();
            $table->string('coordinator')->nullable();
            $table->string('email')->nullable();
            $table->string('status')->default('unpublish');
            $table->string('rank');
            $table->text('description')->nullable();
            $table->string('image', 300);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
