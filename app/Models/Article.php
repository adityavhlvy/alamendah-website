<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'img',
    ];
    protected $with = ['subarticles'];

    public function subarticles() :HasMany
    {
        return $this->hasMany(Subarticle::class);
    }

    public function recent() :HasOne
    {
        return $this->hasOne(recent::class);
    }
}
