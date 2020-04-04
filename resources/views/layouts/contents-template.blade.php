<!--全ページ共通で表示するものはここに記述する-->
 <html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>けいげんクイズ | @yield ('title','')</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  </head>
  <body id="top">
    <header class="header">
    @section('header')
    <!--ヘッダー（共通部分）-->
      <div class="header__logo"><a href="/">けいげんクイズ</a></div>
    @show
    </header>

    <!--フラッシュメッセージ-->
    @if (session('flash_message'))
      <div class="alert alert-primary text-center" role="alert">
        {{ session('flash_message') }}
      </div>
    @endif

    <div class="contain">
      <!--コンテンツ（共通部分）-->
      @yield('content')
    </div>
    <footer class="footer" id="footer">
      @yield('footer')
    </footer>
  </body>
</html>