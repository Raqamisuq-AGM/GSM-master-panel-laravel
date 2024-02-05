<?php

namespace App\Models\License;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;

    protected $fillable = [
        'created_at',
        'next_due',
        'license_code',
        'domain_reg',
        'domain_used',
        'domain_names',
        'status',
    ];
}
