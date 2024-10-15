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
        Schema::create('cards', function (Blueprint $table) {
            //$table->string('id')->primary();
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('tags');
//            $table->mediumText('description')->nullable();
            $table->mediumText('description');
            $table->integer('power');
            $table->integer('toughness');
            $table->integer('blue');
            $table->integer('black');
            $table->integer('green');
            $table->integer('red');
            $table->integer('white');
            $table->integer('generic');
            $table->integer('colorless');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
