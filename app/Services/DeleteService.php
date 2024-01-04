<?php
  namespace App\Services;
  use App\Models\Job;

  class DeleteService
  {
    public function delete_data($id){
      Job::find($id)->delete();
    }
  }