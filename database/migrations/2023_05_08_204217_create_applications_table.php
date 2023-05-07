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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('assignee_id');
            $table->unsignedBigInteger('stage_id');
            $table->unsignedBigInteger('startup_id');
            $table->unsignedBigInteger('challenge_id');
            $table->float('score');
            $table->date('due_date');
            $table->timestamps();

            $table->foreign('assignee_id')->references('id')->on('users');
            $table->foreign('stage_id')->references('id')->on('stages');
            $table->foreign('start_up')->references('id')->on('startups');
            $table->foreign('challenge_id')->references('id')->on('challenges');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
