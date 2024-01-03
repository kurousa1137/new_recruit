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
  {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" --}}
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  @vite(['resources/scss/common/header.scss'])
  @vite(['resources/scss/common/footer.scss'])
  @vite(['resources/scss/common/reset.scss'])
  @yield('style')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  @yield('js')
  <title>@yield('title')</title>
</head>
<body>
  <header>
    <div class="l-header">
      <h1><a href="{{ route('home') }}"><img src="{{ asset('img/common/logo.svg') }}" alt="CSオートディーラー"></a></h1>
    </div>
  </header>
  <main>
    <article>