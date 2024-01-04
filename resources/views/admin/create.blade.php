@extends('admin.common.layout')
@section('title', '新規作成画面')
@section('style')
  @vite(['resources/scss/admin/create.scss'])
@endsection

@section('content')
  <div class="l-main">
    <h2>新規登録画面</h2>
    <form action="{{ route('store') }}" method="POST">
      @csrf
      <dl>
        <dt>職種</dt>
        <dd><input type="text" name="clm01"></dd>
      </dl>
      <dl>
        <dt>仕事内容</dt>
        <dd><textarea name="clm02"></textarea></dd>
      </dl>
      <dl>
        <dt>仕事の流れ</dt>
        <dd><textarea name="clm03"></textarea></dd>
      </dl>
      <dl>
        <dt>応募条件</dt>
        <dd><textarea name="clm04"></textarea></dd>
      </dl>
      <dl>
        <dt>雇用形態</dt>
        <dd>
          <div>
            <select name="clm05">
              <option value>選択してください</option>
              <option value="正社員">正社員</option>
              <option value="アルバイト">アルバイト</option>
            </select>
          </div>
        </dd>
      </dl>
      <dl>
        <dt>勤務地</dt>
        <dd><textarea name="clm06"></textarea></dd>
      </dl>
      <dl>
        <dt>給与</dt>
        <dd><textarea name="clm07"></textarea></dd>
      </dl>
      <dl>
        <dt>休日</dt>
        <dd><textarea name="clm08"></textarea></dd>
      </dl>
      <dl>
        <dt>アクセス</dt>
        <dd><textarea name="clm09"></textarea></dd>
      </dl>
      <dl>
        <dt>福利厚生</dt>
        <dd><textarea name="clm10"></textarea></dd>
      </dl>
      <dl>
        <dt>公開設定</dt>
        <dd>
          <div>
            <select name="flag">
              <option value>選択してください</option>
              <option value="1">表示</option>
              <option value="0">非表示</option>
            </select>
          </div>
        </dd>
      </dl>
      <button type="submit" class="submit-btn">登録</button>
    </form>
  </div>  
@endsection