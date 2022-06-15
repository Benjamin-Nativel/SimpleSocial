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
        Schema::create('interest', function (Blueprint $table) {
            $table->id();
            $table->string('interet',125);
            $table->timestamps();
        });

        Schema::table('interest', function (Blueprint $table) {
            $table->softDeletes();
        });
         
        Schema::table('interest', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
    // vert sur la 1 ere ligne c la table dans myadmin ,
    // l'autre vert c'est le nom de la colone dans la table


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interest');
    }


};
