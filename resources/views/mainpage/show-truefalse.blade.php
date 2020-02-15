@extends('layouts.contents-template')

@section('title','クイズ画面')

@section('content')
  <p>クイズ画面</p>
  <section class="top">
    <div class="top-main">
      <div>けいげんクイズその33</div>
      <div id="app">
          <hello></hello>
          <hello name="Laravel"></hello>
          <hello name="webpack"></hello>
      </div>
      <truefalse-header id="truefalse-header"></truefalse-header>
      <truefalse-contents id="truefalse-contents"></truefalse-contents>
    </div>
  </section>
@endsection
