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
        Schema::create('resumes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('first_name')->nullable(true);
            $table->string('last_name')->nullable(true);
            $table->string('title')->nullable(true);
            $table->longText('summary')->nullable(true);
            $table->string('email')->nullable(true);
            $table->string('phone_no')->nullable(true);
            $table->string('linkedin_url')->nullable(true);
            $table->string('location')->nullable(true);
            $table->string('slug')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');
    }
};
