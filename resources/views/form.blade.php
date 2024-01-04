@extends('common.layout')
@section('title', 'エントリーフォーム - CSオートディーラー')
@section('style')
  @vite(['resources/scss/form.scss'])
@endsection
@section('js')
  @vite(['resources/js/form.js'])
@endsection

@section('content')
  <div class="l-main">
    <div class="main-ttl">
      <h2>エントリーフォーム</h2>
    </div>
    <form action="" method="POST">
      <div class="text-area">
        <input type="text" name="username">
        <span>お名前</span>
      </div>
      <div class="text-area">
        <input type="text" name="kana">
        <span>フリガナ</span>
      </div>
      <div class="select-form">
        <div>
          <select name="gender">
            <option value>選択してください</option>
            <option value="">男</option>
            <option value="">女</option>
          </select>
        </div>
        <span>性別</span>
      </div>
      <div class="text-area">
        <input type="text" name="email">
        <span>メールアドレス</span>
      </div>
      <div class="text-area">
        <input type="tel" name="age">
        <span>年齢</span>
      </div>
      <div class="text-area">
        <input type="tel" name="tel">
        <span>電話番号</span>
      </div>
      <div class="text-area">
        <input type="text" name="address">
        <span>住所</span>
      </div>
      <div class="select-form">
        <div>
          <select name="job">
            <option value>選択してください</option>
            <option value="カーライフアドバイザー（営業）">カーライフアドバイザー（営業）</option>
            <option value="店長候補">店長候補</option>
            <option value="自動車整備士">自動車整備士</option>
            <option value="鈑金塗装工">鈑金塗装工</option>
            <option value="車両管理">車両管理</option>
            <option value="洗車・軽作業（アルバイト）">洗車・軽作業（アルバイト）</option>
          </select>
        </div>
        <span>希望職種</span>
      </div>
      <div class="rirekisho-area">
        <input type="file" name="rirekisho" id="rirekisho">
        <label for="rirekisho">履歴書/ファイルを選択してください</label>
        <p>選択されていません</p>
      </div>
      <div class="shokumukeirekisho-area">
        <input type="file" name="shokumukeirekisho" id="shokumukeirekisho">
        <label for="shokumukeirekisho">職務経歴書/ファイルを選択してください</label>
        <p>選択されていません</p>
      </div>
      <textarea name="content" placeholder="面接希望日など"></textarea>
      <button class="submit-btn">送信</button>
    </form>
  </div>
@endsection