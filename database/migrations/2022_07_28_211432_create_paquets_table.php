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
        Schema::create('paquets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->longText('liste_colis');
            $table->float('poids_paquet');
            $table->float('volume_paquet');
            $table->binary('image_paquet');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paquets');
    }
};
