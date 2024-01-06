@extends('common.layout')
@section('title', '404')
@section('style')
  @vite(['resources/scss/error.scss'])
@endsection

@section('content')
  <div class="l-main">
    <p>お探しのページは見つかりませんでした。</p>
    <a href="{{ route('home') }}">トップページへ戻る</a>
  </div>
@endsection