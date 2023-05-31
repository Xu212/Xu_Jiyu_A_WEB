<?php

use App\Models\teszt;
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
        Schema::create('teszt', function (Blueprint $table) {
            $table->id();
            $table->string('kerdes');
            $table->string('v1');
            $table->string('v2');
            $table->string('v3');
            $table->string('v4');
            $table->string('helyes')->default('v1');
            $table->foreignId('kategoriaId')->references('id')->on('kategoria');
            $table->timestamps();
        });
        teszt::create(['kerdes'=>'A papírt milyen színű szelektív kukába gyűjtjük?','v1'=>'kék','v2'=>'szürke','v3'=>'piros','v4'=>'sárga','kategoriaId'=>1]);
        teszt::create(['kerdes'=>'Melyek komposztálhatóak?','v1'=>'zöldség','v2'=>'fém, műanyag, vegyszer','v3'=>'nagy ágak, fatörzsek','v4'=>'textil','kategoriaId'=>2]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teszt');
    }
};
