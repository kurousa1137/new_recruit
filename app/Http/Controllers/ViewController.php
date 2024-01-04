<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EntryRequest;

class ViewController extends Controller
{
  /**
   * @return view
   * トップページ
   */
  public function home(){
    return view('index');
  }

  /**
   * @return view
   * 職種詳細
   */
  public function detail($id){
    $data = app()->make('detail')->get_job_data($id);
    return view('detail', compact('data'));
  }

  /**
   * @return view
   * エントリーフォーム
   */
  public function form(){
    return view('form');
  }

  /**
   * エントリーフォーム送信処理
   */
  public function send(EntryRequest $request){
    dd($request->all());
  }

  /**
   * @return view
   * ログイン画面
   */
  public function login(){
    return view('login');
  }
}
