@extends('layouts.contents-template')

@section('title','トップ画面')

@section('header')
  @parent
  <!--ヘッダー（共通部分）に追加される個別の部分-->
  <nav class="nav">
    <ul class="nav__list">
      <li><a href="/mainpage">クイズに挑戦</a></li>
      <li><a href="#about-keigen" id="toAbout">軽減税率のフシギ</a></li>
      <li><a href="#book" id="toBook" >本</a></li>
      <li><a href="#imformation" id="toImformation">お知らせ</a></li>
    </ul>
  </nav>
@endsection

@section('content')
  <section class="toppage">
      <div id="app">
        <router-view />
      </div>
  </section>
@endsection