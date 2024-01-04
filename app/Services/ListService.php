<?php
  namespace App\Services;
  use App\Models\Job;

  class ListService
  {
    public function get_job_data(){
      return Job::select('id', 'clm01', 'flag')->get();
    }
  }