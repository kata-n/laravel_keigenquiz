@extends('layouts.contents-template')

@section('title','管理者追加')


@section('header')
  @parent
  <p>サイドバー（共通部分）に追加される個別の部分</p>
@endsection

@section('content')
  <p>管理者を追加する</p>
  <section class="list">
      <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
  </section>
@endsection