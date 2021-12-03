<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Foreign extends Migration
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
            $table -> unsignedBigInteger('bateau_id')->unsigned()->nullable();
            $table -> foreign('bateau_id')->references('id')->on('bateau');
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
        });
    }
}
