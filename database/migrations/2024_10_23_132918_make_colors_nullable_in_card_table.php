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
        Schema::table('cards', function (Blueprint $table) {
            //
            $table->string('blue')->nullable()->change();
            $table->string('black')->nullable()->change();
            $table->string('green')->nullable()->change();
            $table->string('red')->nullable()->change();
            $table->string('white')->nullable()->change();
            $table->string('colorless')->nullable()->change();
            $table->string('generic')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('card', function (Blueprint $table) {
            //
        });
    }
};
