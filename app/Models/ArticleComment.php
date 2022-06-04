<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleComment extends Model
{
    use HasFactory;
    protected $fillable = [
        'article_id',
        'subject',
        'body',
    ];

    public function article(){
        return $this->belongsTo(Article::class);
    }
}
