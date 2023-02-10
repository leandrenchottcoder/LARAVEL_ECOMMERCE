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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('nom_complet');
            $table->string('email');
            $table->string('ville');
            $table->string('commune');
            $table->string('tel1');
            $table->string('tel2')->default('05 00 00 00 00')->nullable();
            $table->mediumText('description');
            $table->string('status')->default('En attente');
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
        Schema::dropIfExists('commandes');
    }
};
