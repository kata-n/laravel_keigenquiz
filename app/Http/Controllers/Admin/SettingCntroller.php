<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingCntroller extends Controller
{
  //認証を行う
  public function __construct()
  {
    $this->middleware('auth');
  }

  //管理者トップ画面
  public function home()
  {
    return view('admin/ad-home');
  }

  //管理者追加
  public function adregist()
  {
    return view('admin/ad-regist');
  }

  //管理者削除
  public function admindelte()
  {
    return view('admin.child-adminregist');
  }

  //メールアドレス変更画面表示
  public function email()
  {
    return view('admin.child-emailchange');
  }

  //パスワード変更画面表示
  public function password()
  {
    return view('admin.child-passwordchange');
  }

}
