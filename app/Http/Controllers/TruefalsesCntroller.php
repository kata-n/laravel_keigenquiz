<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Truefalse;

class TruefalsesCntroller extends Controller
{
  //TOP画面
  public function index()
  {
    return view('toppage/top');
  }
  //クイズ画面
  public function show()
  {
    return view('mainpage/show-truefalse');
  }
}
