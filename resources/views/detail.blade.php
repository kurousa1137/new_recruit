@extends('common.layout')
@section('title', '募集要項 - CSオートディーラー')
@section('style')
  @VITE(['resources/scss/detail.scss'])
@endsection

@section('content')
  <div class="l-main">
    <div class="main-ttl">
      <h2>営業 / カーライフアドバイザー</h2>
      <span>募集要項</span>
    </div>
    <table>
      <tr>
        <th>仕事内容</th>
        <td>ここにテキストが入ります。</td>
      </tr>
      <tr>
        <th>仕事の流れ</th>
        <td>ここにテキストが入ります。</td>
      </tr>
      <tr>
        <th>応募条件</th>
        <td>ここにテキストが入ります。</td>
      </tr>
      <tr>
        <th>雇用形態</th>
        <td>正社員</td>
      </tr>
      <tr>
        <th>勤務地</th>
        <td>ここにテキストが入ります。</td>
      </tr>
      <tr>
        <th>給与</th>
        <td>ここにテキストが入ります。</td>
      </tr>
      <tr>
        <th>休日</th>
        <td>完全週休2日制</td>
      </tr>
      <tr>
        <th>アクセス</th>
        <td>ここにテキストが入ります。</td>
      </tr>
      <tr>
        <th>福利厚生</th>
        <td>ここにテキストが入ります。</td>
      </tr>
    </table>
    <a href="" class="entry-btn">ENTRY</a>
  </div>
@endsection