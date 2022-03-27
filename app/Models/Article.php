<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /**
     * The atributes thta are mass assignable
     * 
     * @var array
     */
    protected $fillable=[
        'user_id',
        'title',
        'body'
    ];
}
