<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Truefalse extends Model
{
  //SQLのテーブル名を指定
  protected $table = 'truefalse';
  //primarykeyを設定
  protected $primaryKey = 'truefalse_id';
  //変更しない
  protected $guarded = ['truefalse_id'];
}
