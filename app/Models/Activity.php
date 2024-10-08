<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'img',
    ];

    public function paketactivities() :HasMany
    {
        return $this->hasMany(PaketActivity::class);
    }
}
