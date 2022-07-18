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
        Schema::create('koperasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('category_koperasi_id');
            $table->string('slug')->unique();
            $table->string('name')->unique();
            $table->string('nik');
            $table->text('description');
            $table->string('phonenumber');
            $table->string('address');
            $table->string('city');
            $table->string('member')->nullable();
            $table->string('employee')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->default(0);
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
        Schema::dropIfExists('koperasis');
    }
};
