<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

class Photo extends Model
{
    use HasFactory;

    protected $fillable =[
        'path',
    ];

    public function article(){

        return $this->belongsTo(Article::class , 'articles_id');
    }
}
