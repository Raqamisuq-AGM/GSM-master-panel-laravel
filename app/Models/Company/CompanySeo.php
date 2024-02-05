<?php

namespace App\Models\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanySeo extends Model
{
    use HasFactory;

    protected $fillable = [
        'author',
        'title',
        'meta_description',
        'keyword',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
