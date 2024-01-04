@extends('admin.common.layout')
@section('title', 'ログイン画面')
@section('style')
  @vite(['resources/scss/login.scss'])
@endsection

@section('content')
  <div class="l-main">
    <div class="login-area">
      <form action="" method="POST">
        @csrf
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" class="submit-btn">Sign In</button>
      </form>
    </div>
  </div>
@endsection