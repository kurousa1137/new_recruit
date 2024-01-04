<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
  public function detail(){
    return view('detail');
  }

  /**
   * @return view
   * エントリーフォーム
   */
  public function form(){
    return view('form');
  }

  /**
   * @return view
   * ログイン画面
   */
  public function login(){
    return view('admin.login');
  }
}
