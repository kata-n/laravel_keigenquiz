@extends('layouts.head')

@extends('layouts.show_truefalse')

@section('title','クイズ一覧')

@section('header')
  @parent
  <p>サイドバー（共通部分）に追加される個別の部分</p>
@endsection

@section('content')
  <p>クイズ一覧</p>
  <section class="list">
  </section>
@endsection

@section('footer')
  @parent
  <script src="dashbord.js"></script>
@endsection