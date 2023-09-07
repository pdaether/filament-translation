<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['title'];

    public $translatable = ['title'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
