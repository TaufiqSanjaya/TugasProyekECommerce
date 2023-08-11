<?php

use Illuminate\Database\Migrations\migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('kategori_produk', 100);
            $table->string('nama_produk', 150);
            $table->integer('stok_produk');
            $table->integer('harga_produk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migraitons.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }

};