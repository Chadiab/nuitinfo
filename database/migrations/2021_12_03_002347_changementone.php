<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Changementone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sauveteur', function (Blueprint $table) {
            //
            $table -> dropcolumn('bateau');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sauveteur', function (Blueprint $table) {
            //
            $table -> dropcolumn('bateau');
        });
    }
}
