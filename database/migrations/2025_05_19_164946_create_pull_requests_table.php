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
        Schema::create('pull_requests', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('api_pr_id')->unique();
            $table->string('api_pr_title');
            $table->string('api_pr_state');
            $table->longText('api_pr_body')->nullable();
            $table->dateTime('api_pr_created_at');
            $table->dateTime('api_pr_merged_at')->nullable();
            $table->dateTime('api_pr_closed_at')->nullable();
            $table->boolean('api_pr_draft');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pull_requests');
    }
};
