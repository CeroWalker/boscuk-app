<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $fillable = [
        'title',
        'title_id',
        'lesson_id',
        'lesson_group',
        'content',
        'content_audio',
        'text_file',
        'audio_file',
    ];

    public function lesson_categories()
    {
        return $this->belongstoMany(LessonCategory::class,'id','category_id');
    }

}



