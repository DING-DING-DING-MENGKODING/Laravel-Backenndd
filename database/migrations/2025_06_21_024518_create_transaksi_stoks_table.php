<?php

use App\Models\Ambulance;
use App\Models\User;
use App\Models\Faskes;
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
        Schema::create('transaksi_stoks', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained();
            $table->foreignIdFor(Faskes::class)->constrained();
            
            $table->unsignedBigInteger('admin_id')->nullable()->onDelete('set null');
            $table->foreign('admin_id')->references('id')->on('users');

            $table->enum('jenis_stok', ['darah', 'oksigen']);
            $table->enum('status', ['masuk', 'keluar']);
            $table->integer('jumlah');
            $table->text('catatan_faskes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_stoks');
    }
};
