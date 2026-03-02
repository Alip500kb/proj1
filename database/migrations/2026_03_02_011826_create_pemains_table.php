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
        Schema::create('pemains', function (Blueprint $table) {
            $table->bigInteger('id')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->timestamps();
            $table->timestamp('last_login_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('delete_reason')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemains');
    }
};
