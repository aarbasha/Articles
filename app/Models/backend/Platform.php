<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\backend\Course;

class Platform extends Model
{
    use HasFactory;

    protected $fillable = ['title' , 'description'];

    public function course()
    {
        return $this->hasMany(Course::class);
    }
}
