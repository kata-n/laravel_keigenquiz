<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDifficult extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('difficult', function (Blueprint $table) {
          $table->bigIncrements('difficult_id');
          $table->string('name');
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
        Schema::dropIfExists('difficult');
    }
}
