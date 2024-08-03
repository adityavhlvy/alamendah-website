<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Recent extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'article_id',
    ];
    protected $with = ['article'];

    public function article() :HasOne
    {
        return $this->hasOne(Article::class);
    }

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
