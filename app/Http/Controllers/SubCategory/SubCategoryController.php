<?php

namespace App\Http\Controllers\SubCategory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    //Get All Sub Category Route
    public function all()
    {
        return view('pages.sub-category.all-sub-category');
    }

    //Add New Sub Category Route
    public function add()
    {
        return view('pages.sub-category.add-sub-category');
    }

    //Edit Sub Category Route
    public function edit()
    {
        return view('pages.sub-category.edit-sub-category');
    }

    //Update Sub Category Route
    public function update()
    {
        return view('hello');
    }

    //Delete Sub Category Route
    public function delete()
    {
        return view('hello');
    }
}
