<?php

namespace App\Http\Controllers\SubCategory;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\SubCategory\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    //Get All Sub Category
    public function all()
    {
        // Retrieve all subcategories from the database
        $subcategories = SubCategory::withCount(['products'])
            ->orderByDesc('created_at')
            ->get();

        return view('pages.sub-category.all-sub-category', compact('subcategories'));
    }

    //Add New Sub Category
    public function add()
    {
        $categories = Category::all(); // Fetch all categories to populate the dropdown

        return view('pages.sub-category.add-sub-category', compact('categories'));
    }

    // Store Sub Category
    public function store(Request $request)
    {
        $request->validate([
            'sub_category' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Check if the subcategory already exists
        $existingSubCategory = SubCategory::where('sub_category', $request->input('sub_category'))
            ->where('category_id', $request->input('category_id'))
            ->first();

        if ($existingSubCategory) {
            // Subcategory already exists, display a warning message
            toastr()->warning('Subcategory already exists!', 'Warning', ['timeOut' => 5000, 'closeButton' => true]);
            return redirect()->route('sub-category.add')->withInput();
        }

        SubCategory::create([
            'sub_category' => $request->input('sub_category'),
            'category_id' => $request->input('category_id'),
        ]);

        toastr()->success('Sub category added successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('sub-category.all');
    }

    //Edit Sub Category
    public function edit($id)
    {
        // Fetch subcategory data from the database based on $id
        $subcategory = SubCategory::find($id);

        // Fetch all categories for the dropdown
        $categories = Category::all();

        return view('pages.sub-category.edit-sub-category', compact('subcategory', 'categories'));
    }

    //Update Sub Category
    public function update(Request $request, $id)
    {

        // Validate the request data
        $request->validate([
            'sub_category' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Update the subcategory in the database
        $subcategory = SubCategory::findOrFail($id);
        $subcategory->update([
            'sub_category' => $request->input('sub_category'),
            'category_id' => $request->input('category_id'),
        ]);
        toastr()->success('Sub category updated successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('sub-category.all');
    }

    //Delete Sub Category
    public function delete(Request $request)
    {
        $subCategory = SubCategory::findOrFail($request->ItemID);
        $subCategory->delete();

        toastr()->success('Sub category deleted successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('sub-category.all');
    }
}
