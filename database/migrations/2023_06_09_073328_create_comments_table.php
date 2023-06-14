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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');

            $table->unsignedBigInteger('question_id');

            $table->text('title');
            $table->text('body');
            $table->timestamps();
        });

        // Schema::table('comments', function (Blueprint $table) {
        //     $table->foreign('user_id')->on('users')->references('id');
        //     $table->foreign('question_id')->on('questions')->references('id');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
