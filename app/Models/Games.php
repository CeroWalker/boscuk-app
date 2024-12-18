<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $fillable = [
        'title',
        'title_id',
        'description',
        'content',
        'content_image',
    ];
}
