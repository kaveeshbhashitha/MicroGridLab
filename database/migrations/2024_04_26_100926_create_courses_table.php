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
            $table->string('coursetitle');
            $table->string('coursename');
            $table->string('faculty');
            $table->string('department');
            $table->string('university');
            $table->string('duration');
            $table->string('deliverymethod');
            $table->string('coursefee');
            $table->string('nextintake');
            $table->text('eligibility01');
            $table->text('eligibility02');
            $table->text('eligibility03');
            $table->text('eligibility04')->nullable();
            $table->text('eligibility05')->nullable();
            $table->text('eligibility06')->nullable();
            $table->string('applyonlineurl')->nullable();
            $table->string('weburl');
            $table->string('moredetailsurl');
            $table->string('telephone');
            $table->string('coordinator');
            $table->string('email');
            $table->string('status')->default('unpublish');
            $table->string('rank');
            $table->text('description');
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
