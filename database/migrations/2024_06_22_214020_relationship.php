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
        //

        Schema::table('books', function (Blueprint $table) {

            $table->foreign('department_id')->references('id')->on('departments');

            $table->foreign('user_id')->references('id')->on('users');

        });

        Schema::table('savebook', function (Blueprint $table) {

            $table->foreign('book_id')->references('id')->on('books');

            $table->foreign('user_id')->references('id')->on('users');

        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('relationships');

    }
};
