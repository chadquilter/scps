<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
  protected $fillable = [
    'upload_name',
    'upload_type',
    'upload_preview',
    'upload_active',
    'upload_display',
    'upload_cat',
    'upload_size',
    'upload_depts',
    'upload_owners',
    'upload_users',
    'upload_dir',
    'upload_url_long',
    'upload_url_short',
    'upload_desc'),
    'upload_display_name'),
    'upload_extension'),
    'upload_user_id'
  ];
}
