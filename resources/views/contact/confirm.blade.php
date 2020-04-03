@extends('layouts.contents-template')

@section('title','お問い合わせ確認画面')

@section('content')
  <section class="confirm">
      <h2 class="heading center">お問い合わせ内容の確認</h2>
    <div class="row">
    <form method="POST" action="{{ route('contact.sent') }}">
        @csrf
      <div class="form-group">
        <label>メールアドレス:</label>
          <div class="text__confirm">
        {{ $inputs['email'] }}
        </div>
        <input
            name="email"
            value="{{ $inputs['email'] }}"
            type="hidden">
      </div>
      <div class="form-group">
        <label>タイトル:</label>
          <div class="text__confirm">
        {{ $inputs['subject'] }}
        </div>
        <input
            name="subject"
            value="{{ $inputs['subject'] }}"
            type="hidden">
      </div>

      <div class="form-group">
        <label>お問い合わせ内容</label>
          <div class="text__confirm">
           {!! nl2br(e($inputs['messagebody'])) !!}
          </div>
        <input
            name="messagebody"
            value="{{ $inputs['messagebody'] }}"
            type="hidden">

       </div>
        <button type="submit" name="action" value="back" class="contact_btn">
            入力内容修正
        </button>
        <button type="submit" name="action" value="submit" class="contact_btn">
            送信する
        </button>
    </form>
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
