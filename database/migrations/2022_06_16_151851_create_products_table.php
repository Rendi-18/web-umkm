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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('umkm_id')->references('id')->on('umkms')->onDelete('cascade');
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('price');
            $table->string('image')->nullable();
            $table->string('weight');
            $table->string('description');
            $table->boolean('isUnggulan')->default(false);
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
        Schema::dropIfExists('products');
    }
};
