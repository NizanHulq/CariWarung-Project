<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();

            $table->string('nama_produk');
            $table->string('satuan');
            $table->integer('harga');
            $table->string('foto_produk');
            $table->string('produk_seo');
            $table->unsignedBigInteger('id_toko');
            $table->foreign('id_toko')->references('id')->on('shop')->onDelete('cascade');

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
        Schema::dropIfExists('product');
    }
}
