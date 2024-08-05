<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Author extends Model
{
    use HasFactory;
    protected $fillable = [
        'article_id',
        'user_id',  
    ];
    protected $with = [
        'user'
    ];

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function article() :BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
}
