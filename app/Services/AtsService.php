<?php
  namespace App\Services;
  use App\Models\ApplicateData;
  use Illuminate\Support\Facades\DB;
  use Illuminate\Support\Facades\Storage;
  use Illuminate\Support\Facades\Hash;

  class AtsService
  {
    public function insert_form_data($request){
      if($request->hasFile('rirekisho')){
        $rirekisho_path = Storage::disk('rirekisho')->putFile('/', $request->file('rirekisho'));
      }else{
        $rirekisho_path = '';
      }

      if($request->hasFile('shokumukeirekisho')){
        $shokumukeirekisho_path = Storage::disk('shokumukeirekisho')->putFile('/', $request->file('shokumukeirekisho'));
      }else{
        $shokumukeirekisho_path = '';
      }

      DB::transaction(function() use($request, $rirekisho_path, $shokumukeirekisho_path){
        DB::connection('mysql2')->table('applicate_data')->insert([
          'username' => $request->username,
          'furigana' => $request->kana,
          'age' => $request->age,
          'gender' => $request->gender,
          'tel' => $request->tel,
          'email' =>$request->email,
          'pref' =>$request->pref,
          'city' =>$request->city,
          'occupation' => $request->job,
          'media' => '自社採用ページ',
          'reception_date' => date('Y-m-d'),
          'rater' => '',
          'assessment' => '-',
          'accepted' => '-',
          'rirekisho_path' => $rirekisho_path,
          'shokumukeirekisho_path' => $shokumukeirekisho_path,
          'created_at' => now(),
        ]);
        DB::commit();
      });
    }
  }