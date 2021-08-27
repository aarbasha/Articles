<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\backend\Article;
use App\Models\backend\Course;

class Section extends Model
{
    use HasFactory;

    protected $fillable = ['title' , 'description'];

    public function article()
    {
        return $this->hasMany(Article::class);
    }

    public function course()
    {
        return $this->hasMany(Course::class);
    }

}
