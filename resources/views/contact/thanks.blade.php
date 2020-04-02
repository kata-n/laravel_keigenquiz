@extends('layouts.contents-template')

@section('title','送信完了')

@section('content')
  <section class="thanks">
    <div class="row">
        <h1>お問い合わせ送信完了</h1>
    </div>
    <div class="row">
        <p>お問い合わせありがとうございました。</p>
    </div>
    <div class="row">
        <p>ご入力いただいた内容は正しく送信されました。</p>
    </div>
    <div>
      <a href="/">トップページへ</a>
    </div>
  </section>
@endsection

@section('footer')
   <div class="footer__content">
    <div class="footer__siteabout">
      <a href="{{ url('/policy')}}">このサイトについて</a>
    </div>
    <div class="footer__copyright">
      Copyright©kata
    </div>
   </div>
@endsection
