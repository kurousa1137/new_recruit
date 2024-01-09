<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job';
    protected $guarded = ['id'];

    public function getFlagDataAttribute(){
      switch($this->flag){
        case 0:
          $res = '';
          break;

        case 1:
          $res = '○';
          break;
      }

      return $res;
    }
}
