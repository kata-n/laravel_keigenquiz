<?php

namespace App\Http\Controllers\Ajax;

use App\Truefalse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TruefalsesCntroller extends Controller
{
  /**
   *クイズテータを取得しjson形式で返す
   */
  public function getQuizAll()
  {
    $tf_quizes = DB::table('truefalse')
      ->select('title', 'circle', 'uncircle', 'commentary')
      ->where([
          ['delete_flg', '=', 0]
      ])
      ->inRandomOrder()
      ->take(3)
      ->get();
    return json_encode($tf_quizes, JSON_UNESCAPED_UNICODE);
  }
}
