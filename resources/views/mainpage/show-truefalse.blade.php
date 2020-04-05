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

@section('footer')
   <div class="footer__content">
    <div class="footer__siteabout">
      <a href="{{ url('/policy')}}">このサイトについて</a>
    </div>
    <div class="footer__copyright">
      Copyright© <a href="{{ url('/login')}}">kata</a>
    </div>
   </div>
@endsection