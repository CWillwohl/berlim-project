<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'role_id',
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getFormattedNameAttribute(): string
    {
        $name = explode(' ', $this->name);
        return $name[0] != null && $name[1] != null
                ? $name[0] . ' ' . $name[1]
                : $this->name;
    }

    public function getIsAdminAttribute(): bool
    {
        return $this->role_id === 1;
    }

    public function registerUser(array $data): self
    {
        return $this->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'role_id' => 2,
        ]);
    }

    public function storeNew(): self
    {
        return $this;
    }

    public function removeUser(): void
    {
        return ;
    }

    public function locks(): HasMany
    {
        return $this->hasMany(Lock::class);
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function address(): HasOne
    {
        return $this->hasOne(Address::class);
    }
}
