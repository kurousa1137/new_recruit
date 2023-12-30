<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
  rel="stylesheet">
  @vite(['resources/scss/common/header.scss'])
  @vite(['resources/scss/common/footer.scss'])
  @vite(['resources/scss/common/reset.scss'])
  @yield('style')
  <title>@yield('title')</title>
</head>
<body>
  <header>
    <div class="l-header">
      <h1><img src="{{ asset('img/common/logo.svg') }}" alt="CSオートディーラー"></h1>
    </div>
  </header>
  <main>
    <article>