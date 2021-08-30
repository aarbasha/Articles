<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\backend\Article;

class photosArticle extends Model
{
    use HasFactory;

    protected $fillabal = ['path'];

    public function article()
    {
        return $this->belongsTo(Article::class , 'articles_id');
    }
}
