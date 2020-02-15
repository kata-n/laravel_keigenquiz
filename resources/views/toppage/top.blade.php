@extends('layouts.contents-template')

@section('title','トップ画面')

@section('header')
  @parent
  <p>ヘッダー（共通部分）に追加される個別の部分</p>
@endsection

@section('content')
  <p>メインコンテンツ</p>
  <section class="top">
    <div class="top-main">
      <div>けいげんクイズ</div>
      <div>あの出来事は8％・10%どっち?</div>
      <a href="{{ url('/mainpage') }}">クイズに挑戦！</a>
    </div>
  </section>
@endsection