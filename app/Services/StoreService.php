<?php
  namespace App\Services;
  use App\Models\Job;
  use Illuminate\Support\Facades\DB;

  class StoreService
  {
    public function store_data($request){
      DB::transaction(function() use($request){
        Job::create($request->input());
        DB::commit();
      });
    }
  }