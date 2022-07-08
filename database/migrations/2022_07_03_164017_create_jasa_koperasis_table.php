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
        Schema::create('jasa_koperasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('koperasi_id')->references('id')->on('koperasis')->onDelete('cascade');
            $table->string('slug')->unique();
            $table->string('service');
            $table->string('name');
            $table->string('description');
            $table->string('image')->nullable();
            $table->string('needs');
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
        Schema::dropIfExists('jasa_koperasis');
    }
};
