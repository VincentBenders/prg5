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
            $table->string('blue')->default(0)->change();
            $table->string('black')->default(0)->change();
            $table->string('green')->default(0)->change();
            $table->string('red')->default(0)->change();
            $table->string('white')->default(0)->change();
            $table->string('colorless')->default(0)->change();
            $table->string('generic')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cards', function (Blueprint $table) {
            //
        });
    }
};
