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
<!--
      <toppage-contents id="toppage-contents">
        <toppage-contents />
      </toppage-contents>
-->

  <div id="app">
    <router-view />
  </div>

      <a href="{{ url('/mainpage') }}">クイズに挑戦！</a>
    </div>
  </section>
@endsection