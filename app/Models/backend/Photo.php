<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\backend\Article;
use App\Models\backend\Course;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = ['path'];

    public function article(){
        return $this->belongsTo(Article::class , 'articles_id');
    }

    public function course(){
        return $this->belongsTo(Course::class , 'courses_id');
    }
}

