@extends('layouts.contents-template')

@section('title','このサイトについて')

@section('header')
  @parent
@endsection

@section('content')
  <section class="sitepolicy">
    <div class="heading center">このサイトについて</div>
    <div class="sitepolicy__container">
      <p>このサイトはプログラミング学習を兼ねたサイトです。</p>
      <p>クイズ及びサイト全ての情報は私自身の経験を元に作成しています。</p>
      <p>間違いが無いよう十分に留意しておりますが、このサイトで得た情報活用による一切の損失等につきましては責任を負いかねます。</p>
      <p>実務で活用する際には国税庁QandA、顧問税理士やその他専門家に問い合わせて頂くようにお願い申し上げます。</p>
      <p>ご指摘、ご質問等お問い合わせは<a href="contact">こちら</a>からお願い致します。</p>
    </div>
    <div class="heading center">当サイトに掲載されている広告について</div>
    <div class="sitepolicy__container">
    <p>当サイトでは、第三者配信の広告サービス（Googleアドセンス、Amazonアソシエイト）を利用しています。</p>
    <p>このような広告配信事業者は、ユーザーの興味に応じた商品やサービスの広告を表示するため、当サイトや他サイトへのアクセスに関する情報 『Cookie』(氏名、住所、メール アドレス、電話番号は含まれません) を使用することがあります。</p>
    <p>またGoogleアドセンスに関して、このプロセスの詳細やこのような情報が広告配信事業者に使用されないようにする方法については、<a href="https://policies.google.com/technologies/ads?hl=ja" target="_blank">こちら</a>をご覧ください。</p>
    </div>
    <div class="heading center">当サイトが使用しているアクセス解析ツールについて</div>
    <div class="sitepolicy__container">
    <p>当サイトでは、Googleによるアクセス解析ツール「Googleアナリティクス」を利用しています。</p>
    <p>このGoogleアナリティクスはトラフィックデータの収集のためにCookieを使用しています。</p>
    <p>このトラフィックデータは匿名で収集されており、個人を特定するものではありません。</p>
    <p>この機能はCookieを無効にすることで収集を拒否することが出来ますので、お使いのブラウザの設定をご確認ください。</p>
    </div>
    <div class="sitepolicy__container sitepolicy__message">
      <p>以上、よろしくお願い致します。</p>
    </div>
  </section>
@endsection

@section('footer')
   <div class="footer__content">
    <div class="footer__copyright">
      Copyright© <a href="{{ url('/login')}}">kata</a>
    </div>
   </div>
@endsection