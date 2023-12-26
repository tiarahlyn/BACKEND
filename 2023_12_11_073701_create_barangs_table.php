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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('foto')->nullable(); // Assuming the 'foto' can be nullable
            $table->integer('jumlah_produk')->default(0); // Assuming the default value is 0
            $table->decimal('harga', 10, 2); // Assuming a decimal type for the 'harga' column
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
