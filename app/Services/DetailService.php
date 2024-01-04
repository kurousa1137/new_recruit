<?php
  namespace App\Services;
  use App\Models\Job;

  class DetailService
  {
    public function get_job_data($id){
      return Job::where('id', $id)->first();
    }
  }

