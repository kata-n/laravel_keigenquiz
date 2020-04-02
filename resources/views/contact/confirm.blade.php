@extends('layouts.contents-template')

@section('title','お問い合わせ確認画面')

@section('content')
  <section class="confirm">
    <div class="row">
        <h1>お問い合わせ内容の確認</h1>
    </div>
    <form method="POST" action="{{ route('contact.sent') }}">
        @csrf

        <label>メールアドレス</label>
        {{ $inputs['email'] }}
        <input
            name="email"
            value="{{ $inputs['email'] }}"
            type="hidden">

        <label>タイトル</label>
        {{ $inputs['subject'] }}
        <input
            name="subject"
            value="{{ $inputs['subject'] }}"
            type="hidden">


        <label>お問い合わせ内容</label>

         {!! nl2br(e($inputs['messagebody'])) !!}
        <input
            name="messagebody"
            value="{{ $inputs['messagebody'] }}"
            type="hidden">

        <button type="submit" name="action" value="back">
            入力内容修正
        </button>
        <button type="submit" name="action" value="submit">
            送信する
        </button>
    </form>
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
