<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    //
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'file_path',
        'original_name',
        'category',
    ];
}
