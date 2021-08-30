<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\backend\Platform;
use App\Models\backend\Photo;

class Course extends Model
{
    use HasFactory;

    protected $fillabel =['title','info','photo','url','status' ,' status','number_videos'];

    public function Platform()
    {
        return $this->belongsTo(Platform::class , 'platforms_id');
    }

}
