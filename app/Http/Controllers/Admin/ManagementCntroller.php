<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Truefalse;
use App\Difficult;

class ManagementCntroller extends Controller
{
  //認証を行う
  public function __construct()
  {
      $this->middleware('auth');
  }

  //クイズ登録
  public function tfregist()
  {
    // 難易度をviewに渡す
    $difficultes = DB::table('difficult')
        ->select('difficult_id', 'name')
        ->get();
      return view('admin/tf-regist',compact('difficultes'));
  }

  //バリデーション
  public function create(Request $request)
  {
    $request->validate([
      'title' => 'required|string|max:255',
      'circle' => 'required',
      'uncircle' => 'required',
      'uncircle2' => 'required',
      'difficult_id' => 'required',
      'commentary' => 'required|string|max:500',
    ]);

    //モデルを使用して、DBに登録する値をセットする
    $registtf = new Truefalse;
    $registtf->difficult_id = $request->difficult_id;
    $registtf->user_id = $request->user()->id;
    $registtf->title = $request->title;
    $registtf->circle = $request->circle;
    $registtf->uncircle = $request->uncircle;
    $registtf->uncircle2 = $request->uncircle2;
    $registtf->commentary = $request->commentary;
    $registtf->correct_num = $request->correct_num;

    //画像ファイル名をランダムの文字列へ＆path変更
    $file = $request->file('image_name');
    if ($file != null) {
        $fileName = str_random(20) . '.' . $file->getClientOriginalExtension();
        Image::make($file)->save(public_path('images/' . $fileName));
        $registtf->image_name = '/images/' . $fileName;
    }

    $registtf->save();
    return redirect('/admin/home')->with('flash_message',__('Registed'));
  }

  //クイズ一覧表示
  public function lists()
  {
    $lists = Truefalse::all();
    return view('/admin/tf-lists',compact('lists'));
  }

  //クイズ編集
  public function edit($truefalse_id)
  {
    // 難易度をviewに渡す
    $difficultes = DB::table('difficult')
        ->select('difficult_id', 'name')
        ->get();

    //DBへの無駄なアクセスを減らす
    if(!ctype_digit($truefalse_id)){
      return redirect('admin/home')->with('flash_message','不正な値が入力されました');
    }

    $truefalse = Truefalse::findOrFail($truefalse_id);
    return view(
      'admin/tf-edit',
      compact('truefalse','difficultes')
    );
  }

  //クイズ更新
  public function update(Request $request, $truefalse_id)
  {
    //DBへの無駄なアクセスを減らす
    if(!ctype_digit($truefalse_id)){
      return redirect('admin/home')->with('flash_message','不正な値が入力されました');
    }

    $truefalse = Truefalse::findOrFail($truefalse_id);
    $truefalse->fill($request->all())->save();
    return redirect('admin/home')->with('flash_message',__('Registed'));
  }

  //クイズ削除
  public function delete(Request $request, $truefalse_id)
  {
    //DBへの無駄なアクセスを減らす
    if(!ctype_digit($truefalse_id)){
      return redirect('admin/home')->with('flash_message','不正な値が入力されました');
    }

    Truefalse::find($truefalse_id)->delete();
    return redirect('admin/home')->with('flash_message',__('Deleted'));
  }
}
