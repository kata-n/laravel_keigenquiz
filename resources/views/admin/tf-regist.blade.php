@extends('layouts.contents-template')

@section('title','クイズを作成')

@section('header')
  @parent
  <p>サイドバー（共通部分）に追加される個別の部分</p>
@endsection

@section('content')
  <form method="post" action="{{ route('tf.regist') }}" enctype="multipart/form-data" class="form">
    @csrf
    @method('POST')
    <div class="form-heading">
      <h1>クイズを作成する</h1>
    </div>
    <div class="form-group">
      <label>問題文を書いてみよう<span class="attention">必須</span></label>
      <textarea cols="50" rows="1" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" placeholder="例）持ち帰ったときの税額について">
      {{ old('title') }}
      </textarea>
      @if($errors->has('title'))
      <span class="invalid-feedback" role="alert">
        {{ $errors->first('title') }}
      </span>
      @endif
    </div>
    <div class="form-group">
      <label>選択肢を入力<span class="attention">必須</span></label>
      <!-- circle正解 -->
      <input type="text" class="form-control{{ $errors->has('circle') ? ' is-invalid' : '' }}" name="circle" value="{{ old('circle') }}" placeholder="正解を入力">
      @if($errors->has('circle'))
      <span class="invalid-feedback" role="alert">
        {{ $errors->first('circle') }}
      </span>
      @endif
      <!-- uncircle間違い -->
      <input type="text" class="form-control{{ $errors->has('uncircle') ? ' is-invalid' : '' }} mt-2" name="uncircle" value="{{ old('uncircle') }}" placeholder="不正解を入力">
      @if($errors->has('uncircle'))
      <span class="invalid-feedback" role="alert">
        {{ $errors->first('uncircle') }}
      </span>
      @endif
    </div>
    <div class="form-group">
      <div class="row">
        <div class="col-6">
          <label>難易度<span class="attention">必須</span></label>
          <select class="form-control" id="category" name="difficult_id">
            @foreach ($difficultes as $difficult)
            <option value="{{ $difficult->difficult_id }}" {{ $difficult->difficult_id == old('difficult_id') ? 'selected' : '' }}>
              {{ $difficult->name }}
            </option>
            @endforeach
          </select>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label>答え（解説）を入力<span class="attention">必須</span></label>
      <textarea cols="40" rows="1" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="commentary" placeholder="答を書く" value="{{ old('commentary') }}">
      {{ old('commentary') }}
      </textarea>
      @if($errors->has('commentary'))
      <span class="invalid-feedback" role="alert">
        {{ $errors->first('commentary') }}
      </span>
      @endif
    </div>
    <!-- image -->
    <div class="form-group form-image-area">
      <label>画像挿入</label>
      <div class="form-image js-area-drop">
        <i class="far fa-image fa-5x"></i>
        <input type="file" class="form-control-file{{ $errors->has('image_name') ? ' is-invalid' : '' }} input-file" name="image_name">
        <img class="prev-img" src="" style="@if(!(old('image_name'))) {{ 'display:none' }} @endif" alt="投稿画像">
      </div>
      @if($errors->has('image_name'))
      <span class="invalid-feedback" role="alert">
        {{ $errors->first('image_name') }}
      </span>
      @endif
    </div>
    <button type="submit" class="btn btn-default btn-large">投稿</button>
  </form>
@endsection
