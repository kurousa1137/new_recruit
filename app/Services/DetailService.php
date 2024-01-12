<?php
  namespace App\Services;
  use App\Models\Job;

  class DetailService
  {
    public function get_job_data($request){
      return Job::where('clm01', $request->clm01)->first();
    }
  }

