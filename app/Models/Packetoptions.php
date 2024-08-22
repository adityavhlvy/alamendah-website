<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Packetoptions extends Model
{
    use HasFactory;
    protected $fillable = [
        'paket_id',
        'price',
        'minimum_person',
    ];

    public function paket() :BelongsTo
    {
        return $this->belongsTo(Paket::class);
    }
}
