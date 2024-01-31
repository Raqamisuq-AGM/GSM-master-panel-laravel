<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Get All Product
    public function all()
    {
        return view('pages.product.all-product');
    }

    //Add Product
    public function add()
    {
        return view('pages.product.add-product');
    }

    //Edit Product
    public function edit()
    {
        return view('pages.product.edit-product');
    }

    //Update Product
    public function update()
    {
        return view('hello');
    }

    //Delete Product
    public function delete()
    {
        return view('hello');
    }
}
