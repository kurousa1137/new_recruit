<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  @vite(['resources/scss/common/reset.scss'])
  @vite(['resources/scss/admin/common/header.scss'])
  @yield('style')
  <title>@yield('title')</title>
</head>
<header>
  <form action="" method="POST">
    @csrf
    <button type="submit" class="logout-btn">ログアウト</button>
  </form>
</header>
<body>