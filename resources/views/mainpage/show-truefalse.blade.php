@extends('layouts.contents-template')

@section('title','クイズ画面')

@section('content')
  <section class="top">
    <div class="top-main">
      <div id="app">
       <router-view />
      </div>
    </div>
  </section>
@endsection
