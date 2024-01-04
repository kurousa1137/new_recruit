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
    return view('admin.list');
  }
}
