<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comments extends Model
{
  use HasFactory, SoftDeletes;
  protected $table = 'comments';
  protected $guarded = ['id'];
  public function replies()
  {
    return $this->hasMany(Comments::class, 'parent_id');
  }

  public function parent()
  {
    return $this->belongsTo(Comments::class, 'parent_id');
  }

  public function news()
  {
    return $this->belongsTo(News::class);
  }
}
