@extends('layouts.contents-template')

@section('title','管理者を追加する')

@section('content')
  <p>管理画面ページ</p>
  <section class="list">

    <div>
      <a href="{{ url('/admin/regist') }}">管理者の追加</a>
      <a href="{{ url('/admin/truefalselists') }}">クイズ一覧を表示</a>
      <a href="{{ url('/admin/tf/regist') }}">クイズを登録する</a>
    </div>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    </div>
  </section>
@endsection