<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsTags extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'news_tags';
    protected $guarded = ['id'];
}
