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
  <!-- Google Tag Manager -->
  <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5CJV2WB');
  </script>
  <!-- PWD画像設定 -->
  <script>
    window.addEventListener('load', function() {
      if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register("/js/serviceWorker.js")
        .then(function(registration) {
          console.log("serviceWorker registed.");
        }).catch(function(error) {
          console.warn("serviceWorker error.", error);
        });
      }
    });
  </script>
  <!-- End Google Tag Manager -->
</head>
<header>
  <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="logout-btn">ログアウト</button>
  </form>
</header>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5CJV2WB"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->