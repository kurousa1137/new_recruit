@extends('common.layout')
@section('title', 'CSオートディーラー採用サイト')
@section('style')
  @vite(['resources/scss/index.scss'])
@endsection

@section('content')
  <div class="l-main">
    <div class="main-visual">
      <picture>
        <source media="(min-width:769px)" srcset="{{ asset('img/top/main_visual.webp') }}">
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
          <li><img src="{{ asset('img/top/img01.webp') }}" alt=""></li>
          <li><img src="{{ asset('img/top/img02.webp') }}" alt=""></li>
          <li><img src="{{ asset('img/top/img03.webp') }}" alt=""></li>
          <li><img src="{{ asset('img/top/img04.webp') }}" alt=""></li>
          <li><img src="{{ asset('img/top/img05.webp') }}" alt=""></li>
          <li><img src="{{ asset('img/top/img06.webp') }}" alt=""></li>
        </ul>
        
        <ul>
          <li><img src="{{ asset('img/top/img01.webp') }}" alt=""></li>
          <li><img src="{{ asset('img/top/img02.webp') }}" alt=""></li>
          <li><img src="{{ asset('img/top/img03.webp') }}" alt=""></li>
          <li><img src="{{ asset('img/top/img04.webp') }}" alt=""></li>
          <li><img src="{{ asset('img/top/img05.webp') }}" alt=""></li>
          <li><img src="{{ asset('img/top/img06.webp') }}" alt=""></li>
        </ul>
      </div>
    </section>

    <section class="l-works">
      <div class="container">
        <h2>WORKS</h2>
        <p>CSオートディーラーでは営業職から<br>専門職までさまざまな職種を募集しています</p>
        <ul>
          <li>
            <a href="{{ route('detail', ['clm01'=>'営業']) }}">
              <img src="{{ asset('img/top/icon01.svg') }}" alt="営業">
              <p>営業</p>
            </a>
          </li>
          <li>
            <a href="{{ route('detail', ['clm01'=>'店長候補']) }}">
              <img src="{{ asset('img/top/icon02.svg') }}" alt="店長候補">
              <p>店長候補</p>
            </a>
          </li>
          <li>
            <a href="{{ route('detail', ['clm01'=>'自動車整備']) }}">
              <img src="{{ asset('img/top/icon03.svg') }}" alt="車両整備">
              <p>自動車整備</p>
            </a>
          </li>
          <li>
            <a href="{{ route('detail', ['clm01'=>'鈑金塗装']) }}">
              <img src="{{ asset('img/top/icon04.svg') }}" alt="鈑金塗装">
              <p>鈑金塗装</p>
            </a>
          </li>
          <li>
            <a href="{{ route('detail', ['clm01'=>'商品管理']) }}">
              <img src="{{ asset('img/top/icon05.svg') }}" alt="商品管理">
              <p>商品管理</p>
            </a>
          </li>
          <li>
            <a href="{{ route('detail', ['clm01'=>'洗車/軽作業']) }}">
              <img src="{{ asset('img/top/icon06.svg') }}" alt="洗車/軽作業">
              <p>洗車/軽作業</p>
            </a>
          </li>
          <li>
            <a href="{{ route('detail', ['clm01'=>'車両入札']) }}">
              <img src="{{ asset('img/top/icon07.svg') }}" alt="車両入札">
              <p>車両入札</p>
            </a>
          </li>
          <li>
            <a href="{{ route('detail', ['clm01'=>'一般事務']) }}">
              <img src="{{ asset('img/top/icon08.svg') }}" alt="一般事務">
              <p>一般事務</p>
            </a>
          </li>
          <li>
            <a href="{{ route('detail', ['clm01'=>'コーティング']) }}">
              <img src="{{ asset('img/top/icon09.svg') }}" alt="コーティング">
              <p>コーティング</p>
            </a>
          </li>
        </ul>
      </div>
    </section>

  </div>
@endsection