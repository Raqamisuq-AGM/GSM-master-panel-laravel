<?php

namespace App\Models\User;

use App\Models\Invoice\Invoice;
use App\Models\License\License;
use App\Models\Notification\UserNotification;
use App\Models\Support\Ticket;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'avatar',
        'first_name',
        'last_name',
        'user_name',
        'email',
        'password',
        'phon',
        'whatsapp',
        'telegram_id',
        'fb_id',
        'linkedin_id',
        'ig_id',
        'twitter_id',
        'address',
        'state',
        'city',
        'country',
        'language',
        'status',
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
        'password' => 'hashed',
    ];

    public function licenses()
    {
        return $this->hasMany(License::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function userNotifications()
    {
        return $this->hasMany(UserNotification::class);
    }
}
