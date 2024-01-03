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

  public function detail(){
    return view('detail');
  }
}
