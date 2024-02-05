<?php

namespace App\Models\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyNotification extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'title',
        'short_desc',
        'url',
        'status',
    ];
}
