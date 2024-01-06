@extends('common.layout')
@section('title', '送信完了')
@section('style')
  @vite(['resources/scss/thanks.scss'])
@endsection

@section('content')
  <div class="l-main">
    <h2>送信完了</h2>
    <p>ご応募ありがとうございます。<br>採用担当者よりご連絡をさせていただきます。</p>
    <input type="hidden" name="email" value="{{ $email }}">
    <input type="hidden" name="tel" value="{{ $tel }}">
  </div>
@endsection