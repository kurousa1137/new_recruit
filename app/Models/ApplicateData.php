<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicateData extends Model
{
  use HasFactory;
  protected $connection = 'mysql2';
  protected $table = 'applicate_data';
  protected $guarded = [];
}
