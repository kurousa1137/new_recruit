@extends('admin.common.layout')
@section('title', '職種一覧')
@section('style')
  @vite(['resources/scss/admin/list.scss'])
@endsection

@section('content')
  <div class="l-main">
    <form action="" method="POST">
      @csrf
      <button type="submit" class="logout-btn">ログアウト</button>
    </form>
    <div class="container">
      <h2>職種一覧</h2>
      <a href="">新規作成</a>
      <table>
        <tr>
          <th>職種</th>
          <th>表示</th>
          <th>操作</th>
        </tr>
        @for($i=0; $i<6; $i++)
        <tr>
          <td><a href="">営業/カーライフアドバイザー</a></td>
          <td>◯</td>
          <td>
            <form action="" method="POST">
              @csrf
              <button type="submit" class="delete-btn" onclick="return confirm('削除しますか？')">
                <span class="material-symbols-rounded">delete_forever</span>
              </button>
            </form>
          </td>
        </tr>
        @endfor
      </table>
    </div>
  </div>
@endsection