@extends('admin.common.layout')
@section('title', 'ログイン画面')
@section('style')
  @vite(['resources/scss/login.scss'])
@endsection

@section('content')
  <div class="l-main">
    <div class="login-area">
      <form action="{{ route('login_store') }}" method="POST">
        @csrf
        <input type="text" name="login_email" placeholder="Email">
        <input type="password" name="login_password" placeholder="Password">
        <button type="submit" class="submit-btn">Sign In</button>
      </form>
      @foreach($errors->all() as $error)
          <p class="error-message">{{ $error }}</p>
      @endforeach
    </div>
  </div>
@endsection