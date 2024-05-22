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
<<<<<<< HEAD
        Schema::create('review', function (Blueprint $table) {
=======
        Schema::create('reviews', function (Blueprint $table) {
>>>>>>> yeison
            $table->id();
            $table->unsignedBigInteger('id_site');
            $table->unsignedBigInteger('id_user');
            $table->integer('score');
            $table->string('comment');
            $table->foreign('id_site')->references('id')->on('sites');
            $table->foreign('id_user')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<< HEAD
        Schema::dropIfExists('review');
=======
        Schema::dropIfExists('reviews');
>>>>>>> yeison
    }
};
