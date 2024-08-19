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
             //menambahkan kategori_id pada table buku
             $table->unsignedBigInteger('kategori_id')->required()->after('penulis');
             //dan membuat foreignkey antara table studen dan class
             $table->Foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('buku', function (Blueprint $table) {
             //menghapus foreignkey kategori_id
             $table->dropForeign(['kategori_id']);
             //menghapus kolom
             $table->dropColumn('kategori_id');
        });
    }
};
