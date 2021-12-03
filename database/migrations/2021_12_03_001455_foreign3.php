<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Foreign3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sauvees', function (Blueprint $table) {
            //
            $table -> unsignedBigInteger('sauveteur_id')->unsigned()->nullable();
            $table -> foreign('sauveteur_id')->references('id')->on('sauveteur');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sauvees', function (Blueprint $table) {
            //
        });
    }
}
