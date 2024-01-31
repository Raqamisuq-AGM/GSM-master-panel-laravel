<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Get All user
    public function all()
    {
        return view('pages.user.all-user');
    }

    //Get Active user
    public function active()
    {
        return view('pages.user.active-user');
    }

    //Get pending user
    public function pending()
    {
        return view('pages.user.pending-user');
    }

    //Get suspended user
    public function suspended()
    {
        return view('pages.user.suspended-user');
    }

     //View user
     public function view()
     {
         return view('pages.user.view-user');
     }

    //Edit user
    public function edit()
    {
        return view('pages.user.edit-user');
    }

    //Update user
    public function update()
    {
        return view('hello');
    }
}
