@extends('layouts.contents-template')

@section('title','クイズ一覧')

@section('content')
<div class="container p-mypage">
  @if(count($lists)!= 0)
  <h1 class="p-mypage__title">@yield('title')</h1>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th style="width:16px">{{ __('NO.') }}</th>
          <th style="width:400px">{{ __('タイトル') }}</th>
          <th style="width:80px">{{ __('編集') }}</th>
          <th style="width:80px">{{ __('削除') }}</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($lists as $key => $list)
        <tr>
          <td>{{ $key+1 }}</td>
          <td>{{ $list->title }}</td>
          <td>
            <a href="{{ url('admin/'.$list->truefalse_id.'/edit') }}" class="btn btn-edit">編集
              <i class="fas fa-pencil-alt"></i>
            </a>
          </td>
          <td>
            <form style="display:inline" action="{{ url('admin/'.$list->truefalse_id.'/delete') }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger" onclick="return confirm('削除しますか？');">削除する
                <i class="fas fa-trash-alt"></i>
              </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
    <p class="text-center my-5">まだ、作成したクイズはありません。<br>クイズを作成してみよう！</p>
    <div class="top-link">
      <a href="/admin/tf-regist">クイズを作成<i class="fas fa-pencil-alt ml-2"></i></a>
    </div>
    @endif
  </div>
</div>
@endsection
