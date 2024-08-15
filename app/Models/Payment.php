<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'paket_id',
        'promocode_id',
        'reservation_date',
        'type',
        'amount',
        'image_payment',
    ];

    public function paket() :HasOne
    {
        return $this->hasOne(Paket::class);
    }

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function promocode() :BelongsTo
    {
        return $this->belongsTo(Promocode::class);
    }
}
