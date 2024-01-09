<?php
  namespace App\Services;
  use App\Models\ApplicateData;
  use Illuminate\Support\Facades\DB;

  class AtsService
  {
    public function insert_form_data($request){
      DB::transaction(function() use($request){
        DB::connection('mysql2')->insert([
          'username' => $request->username,
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
          'created_at' => now(),
        ]);
        DB::commit();
      });
    }
  }