<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //Get All Category
    public function all()
    {
        // Retrieve all categories with counts
        $categories = Category::withCount(['subCategories', 'products'])
            ->orderByDesc('created_at')
            ->get();

        return view('pages.category.all-category', compact('categories'));
    }

    //Add Category
    public function add()
    {
        return view('pages.category.add-category');
    }

    // Store Category
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255|unique:categories,category',
        ]);

        Category::create([
            'category' => $request->input('category'),
        ]);
        toastr()->success('Category added successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('category.all');
    }

    //Edit Category
    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('pages.category.edit-category', compact('category'));
    }

    //Update Category
    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required|string|max:255|unique:categories,category,' . $id,
        ]);

        $category = Category::findOrFail($id);
        $category->update([
            'category' => $request->input('category'),
        ]);
        toastr()->success('Category updated successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('category.all');
    }

    // Delete Category
    public function delete(Request $request)
    {
        $category = Category::findOrFail($request->ItemID);
        $category->delete();

        toastr()->success('Category deleted successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('category.all');
    }
}
