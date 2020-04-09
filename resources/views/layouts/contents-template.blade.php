 <html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="軽減税率に関する問題をクイズ形式で答えながら学べるサイトです。問題はランダムで５問出題されます。全問正解を目指してみよう" />
    <meta name="twitter:card" content="summary"/>
    <meta property="og:url" content="https://application-keigen-quiz.shikatana.com/"/>
    <meta property="og:title" content="けいげんクイズ"/>
    <meta property="og:description" content="軽減税率に関するクイズに挑戦みよう"/>
    <meta property="og:image" content="{{ asset('images/top_view2.png') }}"/>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>けいげんクイズ | @yield ('title','')</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  </head>
  <body id="top">
    <header class="header">
    @section('header')
      <div class="header__logo"><a href="/">けいげんクイズ</a></div>
    @show
    </header>

    @if (session('flash_message'))
      <div class="alert alert-primary text-center" role="alert">
        {{ session('flash_message') }}
      </div>
    @endif

    <div class="contain">
      @yield('content')
    </div>
    <footer class="footer" id="footer">
      @yield('footer')
    </footer>
  </body>
</html>
