<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Achievement extends Model
{
    use HasFactory;
    protected $fillable = [
        'admin_id',
        'name',
    ];
    protected $with = ['admin'];
    public function admin() :BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }
}
