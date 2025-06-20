<?php

use App\Models\Faskes;
use App\Models\JenisOksigen;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stok_oksigens', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Faskes::class)->constrained();
            $table->foreignIdFor(JenisOksigen::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok_oksigens');
    }
};
