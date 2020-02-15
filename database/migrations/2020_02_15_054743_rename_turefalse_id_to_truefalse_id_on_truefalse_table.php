<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameTurefalseIdToTruefalseIdOnTruefalseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('truefalse', function (Blueprint $table) {
            $table->renameColumn('turefalse_id', 'truefalse_id');
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
            $table->renameColumn('truefalse_id', 'turefalse_id');
        });
    }
}
