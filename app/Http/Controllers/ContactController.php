<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactSendmail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('contact.form');
    }

    public function confirm(Request $request){
        //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
        $request->validate([
          'email' => 'required|email',
          'contactitem' => 'required',
          'messagebody' => 'required|string',
        ]);

        //フォームから受け取ったすべてのinputの値を取得
        $inputs = $request->all();

        //入力内容確認ページのviewに変数を渡して表示
        return view('contact.confirm', [
            'inputs' => $inputs,
        ]);
    }

    public function sent(Request $request){
      //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
      $request->validate([
          'email' => 'required|email',
          'contactitem' => 'required',
          'messagebody'  => 'required'
      ]);

      //フォームから受け取ったactionの値を取得
      $action = $request->input('action');

      //フォームから受け取ったactionを除いたinputの値を取得
      $inputs = $request->except('action');

      //actionの値で分岐
      if($action !== 'submit'){
          return redirect()
            ->route('contact')
            ->withInput($inputs);

      } else {
        //入力されたメールアドレスにメールを送信
        \Mail::to($inputs['email'])->send(new ContactSendmail($inputs));

        //再送信を防ぐためにトークンを再発行
        $request->session()->regenerateToken();

        //送信完了ページのviewを表示
        return view('contact.thanks');
      }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
