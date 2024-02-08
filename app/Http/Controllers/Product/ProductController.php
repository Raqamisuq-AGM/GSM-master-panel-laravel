<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\Product\Product;
use App\Models\Product\ProductSeo;
use App\Models\SubCategory\SubCategory;
use GuzzleHttp\Handler\Proxy;
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

        // Fetch all categories for the dropdown
        $categories = Category::all();
        // Fetch all categories for the dropdown
        $subCategories = SubCategory::all();
        return view('pages.product.add-product', compact('categories', 'subCategories'));
    }

    //Store Product
    public function store(Request $request)
    {
        $request->validate([
            'productTitle' => 'required|string|max:255',
            'productDescription' => 'required|string',
            'price' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'subCategory' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'productSEoTitle' => 'required|string|max:255',
            'metaDescription' => 'required|string',
            'keywords' => 'required|string',
        ]);

        // Create a new Product instance
        $product = new Product();
        $product->title = $request->input('productTitle');
        $product->description = $request->input('productDescription');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category');
        $product->sub_category_id = $request->input('subCategory');
        $product->status = $request->input('status');

        // Upload product thumbnail
        if ($request->hasFile('ProductThumb')) {
            // Store the uploaded file in the public directory
            $file = $request->file('ProductThumb');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/img/product'), $fileName);
            $product->thumb = $fileName;
        }

        // Upload product source file
        if ($request->hasFile('ProductFile')) {
            // Store the uploaded file in the public directory
            $sourceFile = $request->file('ProductFile');
            $sourceFileName = time() . '_' . $sourceFile->getClientOriginalName();
            $sourceFile->move(public_path('assets/file/product'), $sourceFileName);
            $product->file = $sourceFileName;
        }

        //Save product
        $product->save();

        // Create a new Product SEO instance and associate it with the product
        $productSeo = new ProductSeo();
        $productSeo->author = $request->input('author');
        $productSeo->title = $request->input('productSEoTitle');
        $productSeo->meta_description = $request->input('metaDescription');
        $productSeo->keyword = $request->input('keywords');
        // Associate Product SEO with the product
        $product->productSeo()->save($productSeo);

        toastr()->success('Product uploaded successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('product.all');
    }

    //Edit Product
    public function edit($id)
    {
        // Fetch product data from the database based on $id
        $product = Product::find($id);
        // Fetch all categories for the dropdown
        $categories = Category::all();
        $subCategories = SubCategory::all();
        return view('pages.product.edit-product', compact('product', 'categories', 'subCategories'));
    }

    //Update Product
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $productSeo = ProductSeo::where('product_id', $product->productSeo->product_id)->first();
        //update product data
        $product->update([
            'productTitle' => $request->input('productTitle'),
            'description' => $request->input('productDescription'),
            'price' => $request->input('price'),
            'category' => $request->input('category'),
            'subCategory' => $request->input('subCategory'),
            'status' => $request->input('status'),
        ]);
        //update product thumb
        if ($request->hasFile('ProductThumb')) {
            // Store the uploaded file in the public directory
            $file = $request->file('ProductThumb');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/img/product'), $fileName);
            $product->update([
                'thumb' => $fileName,
            ]);
        }
        //update product source file
        if ($request->hasFile('ProductFile')) {
            // Store the uploaded file in the public directory
            $sourceFile = $request->file('ProductFile');
            $sourceFileName = time() . '_' . $sourceFile->getClientOriginalName();
            $sourceFile->move(public_path('assets/file/product'), $sourceFileName);
            $product->update([
                'file' => $sourceFileName,
            ]);
        }

        //update product seo data
        $productSeo->author = $request->input('author');
        $productSeo->title = $request->input('productSEoTitle');
        $productSeo->meta_description = $request->input('metaDescription');
        $productSeo->keyword = $request->input('keywords');
        $productSeo->save();

        toastr()->success('Product updated successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('product.edit', ['id' => $id]);
    }

    //Delete Product
    public function delete(Request $request)
    {
        $product = Product::findOrFail($request->ItemID);
        $product->delete();

        toastr()->success('Product deleted successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('product.all');
    }

    //CKEditor file upload
    public function CKEditorFileUpload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originalName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originalName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/' . $fileName);

            return response()->json(['fileName' => $fileName, 'upload' => 1, 'url' => $url]);
        }
    }
}
