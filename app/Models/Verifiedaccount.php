<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Verifiedaccount extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'token',
        'isVerified',
    ];
    protected $with = [
        'user'
    ];

    public function user() :BelongsTo 
    {
        return $this->belongsTo(User::class);
    }
}
