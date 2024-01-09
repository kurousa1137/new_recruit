<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicateData extends Model
{
  use HasFactory;
  protected $table = 'ats.applicate_data';
  protected $guarded = ['id'];
}
