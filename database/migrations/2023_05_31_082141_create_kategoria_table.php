<?php

use App\Models\kategoria;
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
        Schema::create('kategoria', function (Blueprint $table) {
            $table->id();
            $table->string('kategorianev');
            $table->timestamps();
        });
        kategoria::create(['kategorianev'=>'környezetvédelem']);
        kategoria::create(['kategorianev'=>'konyha']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategoria');
    }
};
