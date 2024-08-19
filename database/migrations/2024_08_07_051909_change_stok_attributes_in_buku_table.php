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
        Schema::table('buku', function (Blueprint $table) {
              //mengganti atribut stok menjadi varchar(5) dan nullable
              $table->string('stok', 5)->nullable()->after('nama_buku')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('buku', function (Blueprint $table) {
           //mengembalikan ke atribut semula
           $table->string('stok', 15)->nullable()->after('nama_buku')->change();
        });
    }
};
