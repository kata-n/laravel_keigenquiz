<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTruefalse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('truefalse', function (Blueprint $table) {
            $table->bigIncrements('turefalse_id');
            $table->integer('difficult_id');
            $table->integer('user_id');
            $table->string('title');
            $table->string('circle');
            $table->string('uncircle');
            $table->string('commentary');
            $table->boolean('delete_flg')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('truefalse');
    }
}
