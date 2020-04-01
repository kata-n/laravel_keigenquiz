<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCulumTrufalseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('truefalse', function (Blueprint $table) {
            $table->string('uncircle2');
            $table->integer('correct_num');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('truefalse', function (Blueprint $table) {
            $table->dropColumn('uncircle2');
            $table->dropColumn('correct_num');
        });
    }
}
