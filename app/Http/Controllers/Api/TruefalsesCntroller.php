<?php

namespace App\Http\Controllers\Api;

use App\Truefalse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TruefalsesCntroller extends Controller
{
  /**
   *クイズテータを取得しjson形式で返す
   */
  public function getQuiz()
  {
    $tf_quizes = DB::table('truefalse')
      ->select('title', 'circle', 'uncircle', 'uncircle2','commentary', 'correct_num')
      ->where([
          ['delete_flg', '=', 0]
      ])
      ->inRandomOrder()
      ->take(5)
      ->get();
    return json_encode($tf_quizes, JSON_UNESCAPED_UNICODE);
  }
}
