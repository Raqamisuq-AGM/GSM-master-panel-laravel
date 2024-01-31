<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //Get All Category Route
    public function all()
    {
        return view('pages.category.all-category');
    }

    //Add Category Route
    public function add()
    {
        return view('pages.category.add-category');
    }

    //Edit Category Route
    public function edit()
    {
        return view('pages.category.edit-category');
    }

    //Update Category Route
    public function update()
    {
        return view('hello');
    }

    //Delete Category Route
    public function delete()
    {
        return view('hello');
    }
}
