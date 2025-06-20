<?php

use App\Models\Ambulance;
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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained();
            $table->foreignIdFor(Faskes::class)->constrained();
            
            $table->unsignedBigInteger('admin_id')->nullable()->onDelete('set null');
            $table->foreign('admin_id')->references('id')->on('users');

            $table->foreignIdFor(Ambulance::class)->nullable()->constrained()->onDelete('set null');

            $table->unsignedBigInteger('driver_id')->nullable()->onDelete('set null');
            $table->foreign('driver_id')->references('id')->on('users');

            $table->string('lokasi_user_latitude');
            $table->string('lokasi_user_longitude');
            $table->enum('tipe_transaksi', ['Pemesanan Ambulans', 'Pengambilan Stok']);
            $table->enum('status', ['pending', 'assigned', 'completed']);
            $table->text('catatan_user')->nullable();
            $table->text('catatan_faskes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
