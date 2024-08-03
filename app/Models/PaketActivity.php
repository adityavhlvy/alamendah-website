<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PaketActivity extends Model
{
    use HasFactory;
    protected $fillable = [
        'paket_id',
        'activity_id',
    ];
    protected $with = ['activity'];

    public function paket() :BelongsTo
    {
        return $this->belongsTo(Paket::class);
    }

    public function activity() :BelongsTo
    {
        return $this->belongsTo(Activity::class);
    }
}
