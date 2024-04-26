<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    use HasFactory;
    protected $fillable = ['title','category_id','content','content_audio','attachments','order','created_at','updated_at','id'];

    public function lesson_categories()
    {
        return $this->belongstoMany(LessonCategory::class,'id','category_id');
    }

}



