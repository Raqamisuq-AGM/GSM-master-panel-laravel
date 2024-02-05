<?php

namespace App\Models\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'email',
        'phon',
        'whatsapp',
        'telegram_id',
        'ig_id',
        'twitter_id',
        'fb_id',
        'address',
        'state',
        'city',
        'country',
        'zip',
        'language',
        'timezone',
        'logo',
        'favicon',
    ];

    public function companySeo()
    {
        return $this->hasOne(CompanySeo::class);
    }

    public function companyNotifications()
    {
        return $this->hasMany(CompanyNotification::class);
    }
}
