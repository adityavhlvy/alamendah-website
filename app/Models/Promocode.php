<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Promocode extends Model
{
    use HasFactory;
    protected $fillable = ['code', 'promo_percent'];

    public function payments() :HasMany
    {
        return $this->hasMany(Payment::class);
    }
}
