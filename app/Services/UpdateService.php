<?php
  namespace App\Services;
  use App\Models\Job;
  use Illuminate\Support\Facades\DB;

  class UpdateService
  {
    public function update_data($request){
      DB::transaction(function() use($request){
        $data = Job::find($request->id);
        $data->update($request->input());
        DB::commit();
      });
    }
  }

