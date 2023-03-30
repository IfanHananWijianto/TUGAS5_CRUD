<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keranjang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_produk');
            $table->foreign('id_produk')->references('id')->on('produk');
            $table->string('nama_produk');
            $table->string('harga');
            $table->integer('jumlah');
            $table->integer('total_harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('keranjang', function (Blueprint $table){
            $table->dropColumn('id_produk');
            $table->dropColumn('id_kategori');
        });
    }
};
