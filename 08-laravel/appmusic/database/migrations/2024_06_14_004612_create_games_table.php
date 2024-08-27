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
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('image')->default('no-game.png');
            $table->string('developer');
            $table->date('releasedate');
            $table->unsignedBigInteger('category_id');
            $table->foreign('song_id')->references('id')->on('songs');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->float('price');
            $table->string('genre');
            $table->boolean('slider')->default(0);
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artists');
    }
};
