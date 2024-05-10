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
        Schema::create('Transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('barang_id');
            $table->unsignedBigInteger('pembeli_id');
            $table->integer('jumlah');
            $table->date('tanggal');
            $table->timestamps();

            $table->foreign('barang_id')->references('id')->on('barangs2')->onDelete('cascade');
            $table->foreign('pembeli_id')->references('id')->on('pembelis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Transaksis');
    }
};
