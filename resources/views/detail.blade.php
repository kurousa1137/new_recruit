@extends('common.layout')
@section('title', '募集要項 - CSオートディーラー')
@section('style')
  @vite(['resources/scss/detail.scss'])
@endsection

@section('content')
  <div class="l-main">
    <div class="main-ttl">
      <h2>{{ $data->clm01 }}</h2>
      <span>募集要項</span>
    </div>
    <table>
      <tr>
        <th>仕事内容</th>
        <td>{!! nl2br($data->clm02) !!}</td>
      </tr>
      @if(isset($data->clm03))
        <tr>
          <th>仕事の流れ</th>
          <td>{!! nl2br($data->clm03) !!}</td>
        </tr>
      @endif
      <tr>
        <th>応募条件</th>
        <td>{!! nl2br($data->clm04) !!}</td>
      </tr>
      <tr>
        <th>雇用形態</th>
        <td>{{($data->clm05) }}</td>
      </tr>
      <tr>
        <th>勤務地</th>
        <td>{!! nl2br($data->clm06) !!}</td>
      </tr>
      <tr>
        <th>給与</th>
        <td>{!! nl2br($data->clm07) !!}</td>
      </tr>
      <tr>
        <th>休日</th>
        <td>{!! nl2br($data->clm08) !!}</td>
      </tr>
      <tr>
        <th>アクセス</th>
        <td>{!! nl2br($data->clm09) !!}</td>
      </tr>
      <tr>
        <th>福利厚生</th>
        <td>{!! nl2br($data->clm10) !!}</td>
      </tr>
    </table>
    <div class="contact_area">
      <p>お電話での受付</p>
      <a href="tel:0487496672">048-749-6672</a>
    </div>
    <a href="{{ route('form') }}" class="entry-btn">ENTRY</a>
  </div>
@endsection