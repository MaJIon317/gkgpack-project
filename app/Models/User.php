<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Enums\UserRole;
use App\Observers\UserObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[ObservedBy([UserObserver::class])]
class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'role',
        'name',
        'email',
        'password',
        'timezone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'role' => UserRole::class,
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function hasRole(string|array $role): bool
    {
        if (is_array($role)) {
            return in_array($this->role->value, $role) ? true : false;
        } else {
            return $this->role->value === $role;
        }
    }
    
    public function setTimeZoneAttribute($value): void
    {
        $this->attributes['timezone'] = $value == config('app.timezone') || is_null($value) ? null : $value;
    }

    public function getTimeZoneAttribute ($value): string
    {
        return $value == config('app.timezone') || empty($value) ? config('app.timezone') : $value;
    }

    public function activities(): HasMany
    {
        return $this->hasMany(UserActivity::class)->orderByDesc('created_at');
    }
}
