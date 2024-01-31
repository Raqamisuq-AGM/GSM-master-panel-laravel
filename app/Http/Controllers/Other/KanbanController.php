<?php

namespace App\Http\Controllers\Other;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KanbanController extends Controller
{
    //Kanban Board route controller
    public function index(){
        return view('pages.kanban.kanban');
    }
}
