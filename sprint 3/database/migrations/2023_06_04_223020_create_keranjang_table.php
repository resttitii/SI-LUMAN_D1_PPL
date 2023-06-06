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
        Schema::create('keranjang', function (Blueprint $table) {
            $table->id('keranjang_id');
            $table->string('kode_transaksi')->nullable();
            $table->foreignId('toko_id')->constrained('users', 'user_id')->cascadeOnDelete();
            $table->foreignId('produk_id')->constrained('produk', 'produk_id')->cascadeOnDelete();
            $table->foreignId('cust_id')->constrained('users', 'user_id');
            $table->integer('stock')->nullable();
            $table->enum('status', ['keranjang', 'checkout'])->default('keranjang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjang');
    }
};
