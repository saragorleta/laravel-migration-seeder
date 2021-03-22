<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJewelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jewels', function (Blueprint $table) {
            $table->id();
            $table->string('categoria');
            $table->string('simboli');
            $table->string('genere');
            $table->string('materiale');
            $table->date('nascita_del_gioiello');         
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
        Schema::dropIfExists('jewels');
    }
}
