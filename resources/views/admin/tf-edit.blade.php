@extends('layouts.contents-template')

@section('title','クイズを編集する')

@section('content')
  <form method="post" action="{{ url('admin/'.$truefalse->truefalse_id) }}" enctype="multipart/form-data" class="form">
    @csrf
    <div class="form-heading">
      <h2>クイズを編集する</h2>
      <div class="update-date">最終更新日：<time>{{ $truefalse->updated_at->format('Y/m/d') }}</time></div>
    </div>
    <div class="form-group">
      <label>問題文の編集<span class="attention">必須</span></label>
      <textarea cols="50" rows="1" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $truefalse->title }}" placeholder="例）持ち帰ったときの税額について">
      {{ old('title', $truefalse->title) }}
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
      <input type="text" class="form-control{{ $errors->has('circle') ? ' is-invalid' : '' }}" name="circle" value="{{ old('circle', $truefalse->circle) }}" placeholder="正解答え">
      @if($errors->has('circle'))
      <span class="invalid-feedback" role="alert">
        {{ $errors->first('circle') }}
      </span>
      @endif
      <!-- uncircle間違い -->
      <input type="text" class="form-control{{ $errors->has('uncircle') ? ' is-invalid' : '' }}" name="uncircle" value="{{ old('uncircle', $truefalse->uncircle) }}" placeholder="間違い">
      @if($errors->has('uncircle'))
      <span class="invalid-feedback" role="alert">
        {{ $errors->first('uncircle') }}
      </span>
      @endif
      <!-- uncircle間違い２つ目 -->
      <input type="text" class="form-control{{ $errors->has('uncircle2') ? ' is-invalid' : '' }} mt-2" name="uncircle2" value="{{ old('uncircle', $truefalse->uncircle2) }}" placeholder="２つ目の不正解を入力">
      @if($errors->has('uncircle2'))
      <span class="invalid-feedback" role="alert">
        {{ $errors->first('uncircle2') }}
      </span>
      @endif
    </div>
    <div class="form-group">
      <div class="row">
        <div class="col-6">
          <label>正解を選択<span class="attention">必須</span></label>
          <select class="form-control" id="correct_num" name="correct_num">
            @foreach ($difficultes as $difficult)
            <option value="{{ $difficult->difficult_id }}" {{ $difficult->difficult_id == old('difficult_id',$truefalse->correct_num) ? 'selected' : '' }}>
              {{ $difficult->difficult_id }}
            </option>
            @endforeach
          </select>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="row">
        <div class="col-6">
          <label>難易度<span class="attention">必須</span></label>
          <select class="form-control" id="difficult" name="difficult_id">
            @foreach ($difficultes as $difficult)
            <option value="{{ $difficult->difficult_id }}" {{ $difficult->difficult_id == old('difficult_id',$truefalse->difficult_id) ? 'selected' : '' }}>
              {{ $difficult->name }}
            </option>
            @endforeach
          </select>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label>答え（解説）を入力<span class="attention">必須</span></label>
      <textarea cols="40" rows="1" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="commentary" placeholder="答を書く" value="{{ old('commentary',$truefalse->commentary) }}">
      {{ old('commentary',$truefalse->commentary) }}
      </textarea>
      @if($errors->has('commentary'))
      <span class="invalid-feedback" role="alert">
        {{ $errors->first('commentary') }}
      </span>
      @endif
    </div>
    <button type="submit" class="btn btn-default btn-large">更新！</button>
  </form>
@endsection
