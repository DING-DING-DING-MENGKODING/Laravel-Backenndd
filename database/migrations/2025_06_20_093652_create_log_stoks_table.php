<?php

use App\Models\User;
use App\Models\Faskes;
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
        Schema::create('log_stoks', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained();
            $table->enum('tipe_item', ['darah', 'oksigen']);
            $table->enum('tipe_pergerakan', ['masuk', 'keluar']);
            $table->integer('jumlah');
            $table->string('keterangan');
            $table->foreignIdFor(Faskes::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_stoks');
    }
};
