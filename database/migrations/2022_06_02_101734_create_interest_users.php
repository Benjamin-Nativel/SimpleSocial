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
        Schema::create('interest_users', function (Blueprint $table) {
            $table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users');
            $table->unsignedBigInteger('id_interest');
            $table->foreign('id_interest')->references('id')->on('interest');
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
        Schema::dropIfExists('interest_users');
    }
};
