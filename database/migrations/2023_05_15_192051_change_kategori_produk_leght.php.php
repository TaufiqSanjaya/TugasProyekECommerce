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
            $table->string('kategori_produk', 150)->change();
            
        });
    }

    /**
     * Reverse the migraitons.
     */
    public function down(): void
    {
        Schema::table('produk', function (blueprint $table) {
            $table->string('kategori_produk', 100)->change();
        });
    }
};