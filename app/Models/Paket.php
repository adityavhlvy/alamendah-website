<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Paket extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'img',
        'slogan',
        'minimum_person'
    ];
    protected $with = [
        'paketactivities'
    ];

    public function payment() :HasOne
    {
        return $this->hasOne(Payment::class);
    }

    public function paketactivities() :HasMany
    {
        return $this->hasMany(PaketActivity::class);
    }
}