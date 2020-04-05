@extends('layouts.contents-template')

@section('title','お問い合わせ')

@section('content')
  <section class="contact">
    <h2 class="heading center">お問い合わせ</h2>
    <div class="row">
      <form action="{{ route('contact.confirm') }}" method="post" class="contactform">
      @csrf
      <div class="form-group">
        <label for="InputEmail">メールアドレス</label>
        <input type="email" name="email" class="form-control" id="InputEmail" value="{{ old('email') }}">
        @if($errors->has('email'))
          <p class="text-danger">{{ $errors->first('email')}}</p>
        @endif
      </div>
      <div class="form-group">
        <label for="InputItem">お問い合わせ項目</label>
      <select name="contactitem" class="form-control">
        <option value="">項目を選択してください</option>
        <option value="ご質問・お問い合わせ" @if(old("contactitem")=="ご質問・お問い合わせ") selected @endif>ご質問・お問い合わせ</option>
        <option value="ご意見・ご感想" @if(old("contactitem")=="ご意見・ご感想") selected @endif>ご意見・ご感想</option>
        <option value="不具合・バグ" @if(old("contactitem")=="不具合・バグ") selected @endif>不具合・バグ</option>
        <option value="その他" @if(old("contactitem")=="その他") selected @endif>その他</option>
      </select>
        @if($errors->has('contactitem'))
          <p class="text-danger">{{ $errors->first('contactitem')}}</p>
        @endif
      </div>
      <div class="form-group">
        <label for="InputMessage">お問い合わせ内容</label>
        <textarea name="messagebody" rows="8" cols="80" class="form-control">{{ old('messagebody') }}</textarea>
        @if ($errors->has('messagebody'))
        <p class="text-danger">{{ $errors->first('messagebody') }}</p>
        @endif
      </div>
      <button type="submit" name="action" class="contact_btn" value="sent">送信する</button>
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
      Copyright© <a href="{{ url('/login')}}">kata</a>
    </div>
   </div>
@endsection
