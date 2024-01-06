<?php
  namespace App\Services;
  use App\Models\User;
  use Illuminate\Support\Facades\Auth;

  class LoginService
  {
    public function login_store($request){
      if(Auth::attempt(['email' => $request->login_email, 'password' => $request->login_password])){
        $request->session()->regenerate();
        return to_route('list')->throwResponse();
      }
      return back()->with('error-message', 'ログインに失敗しました')->throwResponse();
    }
  }