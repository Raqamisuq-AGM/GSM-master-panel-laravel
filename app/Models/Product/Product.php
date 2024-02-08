<?php

namespace App\Models\Product;

use App\Models\Category\Category;
use App\Models\Invoice\Invoice;
use App\Models\License\License;
use App\Models\SubCategory\SubCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'sub_category_id',
        'title',
        'description',
        'price',
        'thumb',
        'slider1',
        'slider2',
        'slider3',
        'slider4',
        'file',
        'status',
    ];

    public function licenses()
    {
        return $this->hasMany(License::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function productSeo()
    {
        return $this->hasOne(ProductSeo::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
