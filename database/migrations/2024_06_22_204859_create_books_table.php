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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->bigInteger('department_id')->unsigned();
            $table->index('department_id');
            $table->bigInteger('user_id')->unsigned();
            $table->index('user_id');
            $table->bigInteger('star')->unsigned();
            $table->bigInteger('view')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
