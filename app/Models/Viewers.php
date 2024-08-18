<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Viewers extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'article_id',
        'likes',
    ];

    public function users() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function articles() :BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
}
