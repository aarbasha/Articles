<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\backend\Section;

class Article extends Model
{
    use HasFactory;

    protected $fillable =[
        'title','description','type','article','photo'
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
