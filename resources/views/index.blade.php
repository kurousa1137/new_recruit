@extends('common.layout')
@section('title', 'CSオートディーラー採用サイト')
@section('style')
  @vite(['resources/scss/index.scss'])
@endsection

@section('content')
  <div class="l-main">
    <div class="main-visual">
      <picture>
        <source media="(min-width:769px)" srcset=""{{ asset('img/main_visual/webp') }}>
        <img src="{{ asset('img/top/main_visual_sp.webp') }}" alt="">
      </picture>
      <div class="ttl-sp">
        <p>挑戦の先にしか、</p>
        <p>たどり着けない未来がある</p>
      </div>
      <div class="main-ttl">
        <p>LIVE YOUR LIFE</p>
        <span>CS AUTO DEALER RECRUIT</span>
        <p>挑戦の先にしか、</p>
        <p>たどり着けない未来がある</p>
      </div>
    </div>
    <section class="main-txt">
      <h2>新たなステージへの挑戦</h2>
      <p>創業43年、安心して購入できる中古車を世の中に提供し続けてきました。<br>新たなサービス展開、さらなる会社の基盤強化を目指すために一緒に未来を創る仲間を募集します。</p>
      <div class="slider">
        <ul>
          <li><img src="{{ asset('img/top/sample01.jpg') }}" alt=""></li>
          <li><img src="{{ asset('img/top/sample02.jpg') }}" alt=""></li>
          <li><img src="{{ asset('img/top/sample03.jpg') }}" alt=""></li>
          <li><img src="{{ asset('img/top/sample04.jpg') }}" alt=""></li>
          <li><img src="{{ asset('img/top/sample01.jpg') }}" alt=""></li>
          <li><img src="{{ asset('img/top/sample02.jpg') }}" alt=""></li>
        </ul>
        
        <ul>
          <li><img src="{{ asset('img/top/sample01.jpg') }}" alt=""></li>
          <li><img src="{{ asset('img/top/sample02.jpg') }}" alt=""></li>
          <li><img src="{{ asset('img/top/sample03.jpg') }}" alt=""></li>
          <li><img src="{{ asset('img/top/sample04.jpg') }}" alt=""></li>
          <li><img src="{{ asset('img/top/sample01.jpg') }}" alt=""></li>
          <li><img src="{{ asset('img/top/sample02.jpg') }}" alt=""></li>
        </ul>
      </div>
    </section>

    <section class="l-works">
      <div class="container">
        <h2>WORKS</h2>
        <p>CSオートディーラーでは営業職から<br>専門職までさまざまな職種を募集しています</p>
        <ul>
          <li>
            <a href="">
              <img src="{{ asset('img/top/icon01.svg') }}" alt="営業">
              <p>営業</p>
            </a>
          </li>
          <li>
            <a href="">
              <img src="{{ asset('img/top/icon02.svg') }}" alt="営業">
              <p>店長候補</p>
            </a>
          </li>
          <li>
            <a href="">
              <img src="{{ asset('img/top/icon03.svg') }}" alt="営業">
              <p>車両整備</p>
            </a>
          </li>
          <li>
            <a href="">
              <img src="{{ asset('img/top/icon04.svg') }}" alt="営業">
              <p>鈑金塗装</p>
            </a>
          </li>
          <li>
            <a href="">
              <img src="{{ asset('img/top/icon05.svg') }}" alt="営業">
              <p>商品管理</p>
            </a>
          </li>
          <li>
            <a href="">
              <img src="{{ asset('img/top/icon06.svg') }}" alt="営業">
              <p>洗車/軽作業</p>
            </a>
          </li>
        </ul>
      </div>
    </section>

  </div>
@endsection