<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     *
     *
     *
     *
     *

     */
    public function up(): void
    {
        Schema::create('game-lists', function (Blueprint $table) {
            $table->bigInteger('id')->unique();
            $table->string('gamename');
            $table->string('genre');
            $table->text('desc');
            $table->integer('price');
            $table->string('version');
            $table->timestamp('uploaded_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
