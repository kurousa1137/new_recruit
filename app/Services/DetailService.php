<?php
  namespace App\Services;
  use App\Models\Job;

  class DetailService
  {
    public function get_job_data($request){
      return Job::where('id', $request->id)->first();
    }
  }

