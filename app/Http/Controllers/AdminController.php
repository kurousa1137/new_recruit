<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  /**
   * @return view
   * 職種一覧画面
   */
  public function list(){
    $data = app()->make('index')->get_job_data();
    return view('admin.list', compact('data'));
  }

  /**
   * @return view
   * 新規作成画面
   */
  public function create(){
    return view('admin.create');
  }

  /**
   * 新規登録処理
   */
  public function store(Request $request){
    app()->make('store')->store_data($request);
    return to_route('list');
  }

  /**
   * @return view
   * 記事編集画面
   */
  public function edit(){
    return view('admin.edit');
  }

  /**
   * 記事削除処理
   */
  public function delete(){
    app()->make('delete')->delete_data(request('id'));
    return to_route('list');
  }
  
}
