<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tournament_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('round_number');
            $table->unsignedBigInteger('match_number');
            $table->unsignedBigInteger('participant1_id');
            $table->unsignedBigInteger('participant2_id')->nullable();
            $table->unsignedBigInteger('winner_id')->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('participant1_id')->references('id')->on('participants')->onDelete('cascade');
            $table->foreign('participant2_id')->references('id')->on('participants')->onDelete('cascade');
            $table->foreign('winner_id')->references('id')->on('participants')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('matches');
    }
};
