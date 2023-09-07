<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Comment extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['text', 'post_id'];

    public $translatable = ['text'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
