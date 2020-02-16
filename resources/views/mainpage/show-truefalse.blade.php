@extends('layouts.contents-template')

@section('title','クイズ画面')

@section('content')
  <p>クイズ画面</p>
  <section class="top">
    <div class="top-main">
      <div>けいげんクイズ</div>
      <truefalse-header id="truefalse-header"></truefalse-header>
      <truefalse-contents id="truefalse-contents" class="row"></truefalse-contents>
    </div>
    <a class="navbar-brand" href="{{ url('/') }}">トップページへ戻る</a>
  </section>
@endsection
