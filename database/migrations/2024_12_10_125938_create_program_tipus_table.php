<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('program_tipus', function (Blueprint $table) {
            $table->integer('programtipus_id')->primary();
            $table->string('program_id', 30)->unique();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('program_tipus');
    }
};
