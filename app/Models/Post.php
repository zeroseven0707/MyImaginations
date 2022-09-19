<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'img',
        'title',
        'look',
        'star',
        'user_id',
        'bookmark',
        'status',
        'category_id',
        'isi',
    ];
}
