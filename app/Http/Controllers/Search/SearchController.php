<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    // Simple search route controller
    public function simple(){
        return view('pages.search.simple-search');
    }

    // Enhanced search route controller
    public function enhanced(){
        return view('pages.search.enhanced-search');
    }
}
