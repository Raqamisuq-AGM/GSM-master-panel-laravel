<?php

namespace App\Http\Controllers\Table;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableController extends Controller
{
    // Simple Table route controller
    public function simple(){
        return view('pages.table.simple-table');
    }

    // Data Table route controller
    public function dataTable(){
        return view('pages.table.data-table');
    }

    // Js-grid Table route controller
    public function jsGrid(){
        return view('pages.table.jsGrid-table');
    }
}
