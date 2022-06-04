<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'cover',
        'body',
        'likes',
        'shows',
    ];


    public function tags()
    {
        return $this->belongsToMany(ArticleTag::class);
    }

    public function articleComments()
    {
        return $this->hasMany(ArticleComment::class);
    }
}
