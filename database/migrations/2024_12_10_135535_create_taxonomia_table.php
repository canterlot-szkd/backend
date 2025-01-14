<?php

use App\Models\Taxonomia;
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
        Schema::create('taxonomias', function (Blueprint $table) {
            $table->integer('taxonomia_id', true);
            $table->string('elnevezes', 100)->unique();
        });

        Taxonomia::create([
            'elnevezes'=>'családi'
        ]);

        Taxonomia::create([
            'elnevezes'=>'szabadtéri'
        ]);

        Taxonomia::create([
            'elnevezes'=>'kulturális'
        ]);

        Taxonomia::create([
            'elnevezes'=>'kisállat barát'
        ]);

        Taxonomia::create([
            'elnevezes'=>'zene'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('taxonomias');
    }
};
