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
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('username');
            $table->date('password');
            $table->foreignId('id_barang')->constrained('barang')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_supl')->constrained('supplier')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_dist')->constrained('distributor')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
};
