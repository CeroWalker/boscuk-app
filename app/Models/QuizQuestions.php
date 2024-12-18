<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizQuestions extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $fillable = [
        'title',
        'title_id',
        'quiz_id',
        'quiz_group',
        'html',
    ];
}
