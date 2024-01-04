@extends('admin.common.layout')
@section('title', '職種一覧')
@section('style')
  @vite(['resources/scss/admin/list.scss'])
@endsection

@section('content')
  <div class="l-main">
    <div class="container">
      <h2>職種一覧</h2>
      <a href="{{ route('create') }}">新規作成</a>
      <table>
        <tr>
          <th>職種</th>
          <th>表示</th>
          <th>操作</th>
        </tr>
        @foreach($data as $list)
        <tr>
          <td><a href="">{{ $list->clm01 }}</a></td>
          <td>{{ $list->FlagData }}</td>
          <td>
            <form action="{{ route('delete', ['id'=>$list->id]) }}" method="POST">
              @csrf
              <button type="submit" class="delete-btn" onclick="return confirm('削除しますか？')">
                <span class="material-symbols-rounded">delete_forever</span>
              </button>
            </form>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
@endsection