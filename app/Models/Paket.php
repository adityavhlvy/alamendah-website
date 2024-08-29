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
        'img',
        'slogan',
    ];

    public function paketactivities() :HasMany
    {
        return $this->hasMany(PaketActivity::class);
    }

    public function paketoptions() :HasMany
    {
        return $this->hasMany(Packetoptions::class);
    }

    public function scopeSearch($query, $keywords)
    {
        return $query->where('name', 'LIKE', "%$keywords%")
                     ->orWhere('description', 'LIKE', "%$keywords%")
                     ->orWhere('slogan', 'LIKE', "%$keywords")
                     ->orWhereHas('paketactivities.activity', function ($query) use ($keywords) {
                       $query->where('name', 'LIKE', "%$keywords%")
                             ->orWhere('description', 'LIKE', "%$keywords%");
                       });
    }
}
