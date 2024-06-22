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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('match_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('participant_id');
            $table->unsignedInteger('score')->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('participant_id')->references('id')->on('participants')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('results');
    }
};
