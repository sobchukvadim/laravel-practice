<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Cache;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
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
    ];

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
    ];

    public function hasVisitAt(Carbon|string $date): bool
    {
        if ($date instanceof Carbon) {
            $date = $date->format('Y-m-d');
        }

        return $this->visits()->where('date', $date)->exists();
    }

    public function logVisit(): void
    {
        $date = now()->format('Y-m-d');

        Cache::remember(sprintf('user_visit_%s_%s', $this->id, $date), 3600*24, function() use ($date) {
            return (bool)$this->visits()->firstOrCreate([
                'date' => $date,
            ]);
        });
    }

    /**
     * Get the visits for the user
     */
    public function visits()
    {
        return $this->hasMany(Visit::class);
    }
}
