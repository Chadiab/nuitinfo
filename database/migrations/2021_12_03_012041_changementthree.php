<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Changementthree extends Migration
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
            $table->dropColumn('x');
            $table->dropColumn('y');
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
            $table->dropColumn('x');
            $table->dropColumn('y');
        });
    }
}
