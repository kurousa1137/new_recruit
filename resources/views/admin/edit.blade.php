@extends('admin.common.layout')
@section('title', '編集画面')
@section('style')
  @vite(['resources/scss/admin/edit.scss'])
@endsection

@section('content')
  <div class="l-main">
    <h2>記事編集画面</h2>
    <form action="{{ route('update', ['id'=>$data->id]) }}" method="POST">
      @csrf
      <dl>
        <dt>職種</dt>
        <dd><input type="text" name="clm01" value="{{ $data->clm01 }}"></dd>
      </dl>
      <dl>
        <dt>仕事内容</dt>
        <dd><textarea name="clm02">{{ $data->clm02 }}</textarea></dd>
      </dl>
      <dl>
        <dt>仕事の流れ</dt>
        <dd><textarea name="clm03">{{ $data->clm03 }}</textarea></dd>
      </dl>
      <dl>
        <dt>応募条件</dt>
        <dd><textarea name="clm04">{{ $data->clm04 }}</textarea></dd>
      </dl>
      <dl>
        <dt>雇用形態</dt>
        <dd>
          <div>
            <select name="clm05">
              <option value>選択してください</option>
              <option value="正社員" @selected(old('clm05', $data->clm05) == '正社員')>正社員</option>
              <option value="アルバイト" @selected(old('clm05', $data->clm05) == 'アルバイト')>アルバイト</option>
            </select>
          </div>
        </dd>
      </dl>
      <dl>
        <dt>勤務地</dt>
        <dd><textarea name="clm06">{{ $data->clm06 }}</textarea></dd>
      </dl>
      <dl>
        <dt>給与</dt>
        <dd><textarea name="clm07">{{ $data->clm07 }}</textarea></dd>
      </dl>
      <dl>
        <dt>休日</dt>
        <dd><textarea name="clm08">{{ $data->clm08 }}</textarea></dd>
      </dl>
      <dl>
        <dt>アクセス</dt>
        <dd><textarea name="clm09">{{ $data->clm09 }}</textarea></dd>
      </dl>
      <dl>
        <dt>福利厚生</dt>
        <dd><textarea name="clm10">{{ $data->clm10 }}</textarea></dd>
      </dl>
      <dl>
        <dt>公開設定</dt>
        <dd>
          <div>
            <select name="flag">
              <option value>選択してください</option>
              <option value="1" @selected(old('flag', $data->flag) == 1)>表示</option>
              <option value="0" @selected(old('flag', $data->flag) == 2)>非表示</option>
            </select>
          </div>
        </dd>
      </dl>
      <button type="submit" class="submit-btn" onclick="return confirm('更新しますか？')">更新</button>
    </form>
  </div>  
@endsection