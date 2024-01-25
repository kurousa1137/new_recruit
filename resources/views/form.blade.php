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
    <form action="{{ route('send') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="text-area">
        <input type="text" name="username" value={{ old('username') }}>
        <span class="required">お名前</span>
      </div>
      @error('username')
        <p class="error-message">{{ $message }}</p>
      @enderror

      <div class="text-area">
        <input type="text" name="kana" value={{ old('kana') }}>
        <span class="required">フリガナ</span>
      </div>
      @error('kana')
        <p class="error-message">{{ $message }}</p>
      @enderror

      <div class="select-form">
        <div>
          <select name="gender">
            <option value>選択してください</option>
            <option value="男" @selected(old('gender') == '男')>男</option>
            <option value="女" @selected(old('gender') == '女')>女</option>
          </select>
        </div>
        <span class="required">性別</span>
      </div>
      @error('gender')
        <p class="error-message">{{ $message }}</p>
      @enderror

      <div class="text-area">
        <input type="text" name="email" value={{ old('email') }}>
        <span class="required">メールアドレス</span>
      </div>
      @error('email')
        <p class="error-message">{{ $message }}</p>
      @enderror

      <div class="text-area">
        <input type="tel" name="age" value="{{ old('age') }}">
        <span class="required">年齢</span>
      </div>
      @error('age')
        <p class="error-message">{{ $message }}</p>
      @enderror
      
      <div class="text-area">
        <input type="tel" name="tel" value="{{ old('tel') }}">
        <span class="required">電話番号</span>
      </div>
      @error('tel')
        <p class="error-message">{{ $message }}</p>
      @enderror
      
      <div class="select-form">
        <div>
          <select name="pref">
            <option value>選択してください</option>
            @foreach($pref as $list)
              <option value="{{ $list }}" @selected(old('pref') == $list)>{{ $list }}</option>
            @endforeach
          </select>
        </div>
        <span class="required">都道府県</span>
      </div>
      @error('pref')
        <p class="error-message">{{ $message }}</p>
      @enderror

      <div class="text-area">
        <input type="text" name="city" value="{{ old('city') }}">
        <span class="required">市区町村</span>
      </div>
      @error('city')
        <p class="error-message">{{ $message }}</p>
      @enderror

      <div class="text-area">
        <input type="text" name="address" value="{{ old('address') }}">
        <span>番地（建物名）</span>
      </div>
      @error('address')
        <p class="error-message">{{ $message }}</p>
      @enderror

      <div class="select-form">
        <div>
          <select name="job">
            <option value>選択してください</option>
            <option value="営業" @selected(old('job') == '営業')>カーライフアドバイザー（営業）</option>
            <option value="店長候補" @selected(old('job') == '店長候補')>店長候補</option>
            <option value="自動車整備" @selected(old('job') == '自動車整備')>自動車整備</option>
            <option value="鈑金塗装" @selected(old('job') == '鈑金塗装')>鈑金塗装</option>
            <option value="コーティング" @selected(old('job') == 'コーティング')>コーティング</option>
            <option value="商品管理"@selected(old('job') == '商品管理')>商品管理</option>
            <option value="一般事務"@selected(old('job') == '一般事務')>一般事務</option>
            <option value="応札・軽作業（A）"@selected(old('job') == '応札・軽作業（A）')>車両入札（アルバイト）</option>
            <option value="洗車（A）"@selected(old('job') == '洗車（A）')>洗車・軽作業（アルバイト）</option>
          </select>
        </div>
        <span class="required">希望職種</span>
      </div>
      @error('job')
        <p class="error-message">{{ $message }}</p>
      @enderror

      <div class="rirekisho-area">
        <input type="file" name="rirekisho" id="rirekisho">
        <label for="rirekisho">履歴書/ファイルを選択してください</label>
        <p>選択されていません</p>
      </div>
      @error('rirekisho')
        <p class="error-message">{{ $message }}</p>
      @enderror

      <div class="shokumukeirekisho-area">
        <input type="file" name="shokumukeirekisho" id="shokumukeirekisho">
        <label for="shokumukeirekisho">職務経歴書/ファイルを選択してください</label>
        <p>選択されていません</p>
      </div>
      @if($errors->has('shokumukeirekisho'))
        <p class="error-message">{{ $errors->first('shokumukeirekisho') }}</p>
      @endif

      <textarea name="content" placeholder="面接希望日など">{{ old('content') }}</textarea>
      <button class="submit-btn">送信</button>
    </form>
  </div>
@endsection