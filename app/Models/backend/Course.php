<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\backend\Section;
use App\Models\backend\Photo;

class Course extends Model
{
    use HasFactory;

    protected $fillabel =['title','info','photo','url','status' ,' status','number_videos'];

    public function section()
    {
        return $this->belongsTo(Section::class , 'sections_id');
    }

    public function photo(){
        return $this->hasMany(Photo::class);
    }
}
