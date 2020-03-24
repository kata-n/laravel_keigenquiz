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
      <div id="app">
        <router-view />
      </div>
      <a href="{{ url('/mainpage') }}" class="btn btn-primary center-block">クイズに挑戦！</a>
    </div>
  </section>
@endsection