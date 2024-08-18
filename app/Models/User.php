<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'telephone',
        'address',
        'token',
        'isVerified',
    ];

    public function payments() :HasMany
    {
        return $this->hasMany(Payment::class);
    }

    public function verifiedaccount() :HasOne
    {
        return $this->hasOne(Verifiedaccount::class);
    }

    public function recents() :HasMany
    {
        return $this->hasMany(Recent::class);
    }

    public function author() :HasOne
    {
        return $this->hasOne(Author::class);
    }

    public function admin() :HasOne
    {
        return $this->hasOne(Admin::class);
    }

    public function viewer() :BelongsTo
    {
        return $this->belongsTo(Viewers::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
