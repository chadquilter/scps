<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
      'name',
      'type',
      'description',
      'task_date'
    ];
}
