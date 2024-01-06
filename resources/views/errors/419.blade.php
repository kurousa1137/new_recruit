@extends('common.layout')
@section('title', '419')
@section('style')
  @vite(['resources/scss/error.scss'])
@endsection

@section('content')
  <div class="l-main">
    <p>セッションが切断されました。</p>
    <a href="{{ route('home') }}">トップページへ戻る</a>
  </div>
@endsection