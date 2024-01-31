<?php

namespace App\Http\Controllers\Other;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WidgetController extends Controller
{
    //Widget route controller
    public function index(){
        return view('pages.widgets.widget');
    }
}
