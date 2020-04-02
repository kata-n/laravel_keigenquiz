@extends('layouts.contents-template')

@section('title','お問い合わせ')

@section('content')
  <section class="contact">
    <div class="row">
        <h1>お問い合わせ</h1>
    </div>
    <div class="row">
      <form action="{{ route('contact.confirm') }}" method="post">
      @csrf
      <div class="form-group">
          <label for="InputEmail">メールアドレス</label>
          <input type="email" name="email" class="form-control" id="InputEmail" value="{{ old('email') }}">
          @if($errors->has('email'))
              <p class="text-danger">{{ $errors->first('email')}}</p>
          @endif
      </div>
      <div class="form-group">
          <label for="InputSubject">件名</label>
          <input type="text" name="subject" class="form-control" id="InputSubject" value="{{ old('subject') }}">
          @if($errors->has('subject'))
              <p class="text-danger">{{ $errors->first('subject')}}</p>
          @endif
      </div>
      <div class="form-group">
          <label for="InputMessage">メッセージ</label>
    <textarea name="messagebody">{{ old('messagebody') }}</textarea>
    @if ($errors->has('messagebody'))
        <p class="error-message">{{ $errors->first('messagebody') }}</p>
    @endif
      </div>
      <button type="submit" name="action" class="btn btn-primary" value="sent">送信する</button>
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
