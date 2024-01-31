<?php

namespace App\Http\Controllers\Other;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //Calendar route controller
    public function index(){
        return view('pages.gallery.gallery');
    }
}
