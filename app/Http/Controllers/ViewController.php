<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EntryRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\ShopMail;
use App\Mail\UserMail;
use App\Enums\Pref;

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
  public function detail(Request $request){
    $data = app()->make('detail')->get_job_data($request);
    return view('detail', compact('data'));
  }
  
  /**
   * @return view
   * エントリーフォーム
   */
  public function form(){
    $pref = Pref::getValue('PrefList');
    return view('form', compact('pref'));
  }

  /**
   * エントリーフォーム送信処理
   */
  public function send(EntryRequest $request){
    //ATSデータベースにもデータを登録
    app()->make('ats')->insert_form_data($request);

    $send_list = [
      'd-sugimoto@csauto.jp',
      'h-isituka@csauto.jp',
      'yo-takahashi@csauto.jp',
      'k-fujita@csauto.jp',
      's-kaneko@csauto.jp',
      'k-syoji@csauto.jp',
    ];

    Mail::to($send_list)
      ->send(new ShopMail($request));

    Mail::to($request->email)
      ->send(new UserMail($request));

    //LINE通知処理
    $token = "Remb61RYLvF4XUnbYuh5DNTy7Al1a17KkAzbmIdtEak"; 
    $message = "リクルートサイトから応募がありました。\n";
    $message .= "メールをご確認ください。\n\n";
    $message .= "=============================\n";
    $message .= "お名前：".$request->username."\n";
    $message .= "フリガナ：".$request->kana."\n";
    $message .= "性別：".$request->gender."\n";
    $message .= "メールアドレス：".$request->email."\n";
    $message .= "年齢：".$request->age."\n";
    $message .= "電話番号：".$request->tel."\n";
    $message .= "都道府県：".$request->pref."\n";
    $message .= "市区町村：".$request->city."\n";
    $message .= "番地：".$request->address."\n";
    $message .= "希望職種：".$request->job."\n";
    $message .= "備考".$request->content."\n";
    $message .= "=============================\n";

    $query = http_build_query(['message' => $message]);
    $header = ['Authorization: Bearer ' . $token];
    $ch = curl_init('https://notify-api.line.me/api/notify');
    $options = [
      CURLOPT_RETURNTRANSFER  => true,
      CURLOPT_POST            => true,
      CURLOPT_HTTPHEADER      => $header,
      CURLOPT_POSTFIELDS      => $query
    ];
    
    curl_setopt_array($ch, $options);
    $response = curl_exec($ch);
    curl_close($ch);
    
    $response;

    $request->session()->regenerateToken();
    return to_route('thanks')->with(['email'=>$request->email, 'tel'=>$request->tel]);
  }

  /**
   * サンクス画面
   */
  public function thanks(Request $request){
    $email = $request->session()->get('email') ?? '';
    $tel = $request->session()->get('tel') ?? '';
    return view('thanks', compact('email', 'tel'));
  }

  /**
   * @return view
   * ログイン画面
   */
  public function login(){
    if(Auth::check()){
      return to_route('list');
    }

    return view('login');
  }

  /**
   * @param string $email, $password
   * ログイン処理
   */
  public function login_store(LoginRequest $request){
    app()->make('login')->login_store($request);
  }
}
