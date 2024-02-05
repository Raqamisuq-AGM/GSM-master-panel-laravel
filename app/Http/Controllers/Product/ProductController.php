<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Get All Product
    public function all()
    {
        // Retrieve all subcategories from the database
        $products = Product::orderByDesc('created_at')
            ->get();
        return view('pages.product.all-product', compact('products'));
    }

    //Add Product
    public function add()
    {
        return view('pages.product.add-product');
    }

    //Store Product
    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([
            'productTitle' => 'required|string|max:255',
            'productDescription' => 'required|string',
            'price' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'subCategory' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'seoTitle' => 'required|string|max:255',
            'metaDescription' => 'required|string',
            'keywords' => 'required|string',
        ]);

        // Create a new Product instance
        $product = new Product();
        $product->title = $request->input('productTitle');
        $product->description = $request->input('productDescription');
        $product->category_id = $request->input('category');
        $product->sub_category_id = $request->input('subCategory');
        $product->save();

        toastr()->success('Product uploaded successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('product.all');
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
