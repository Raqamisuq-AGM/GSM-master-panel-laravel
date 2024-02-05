<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSeo extends Model
{
    use HasFactory;

    protected $fillable = [
        'author',
        'title',
        'meta_description',
        'keyword',
    ];
}
