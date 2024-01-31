<?php

namespace App\Http\Controllers\License;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LicenseController extends Controller
{
    //Get All license
    public function all()
    {
        return view('pages.license.all-license');
    }

    //Add license
    public function create()
    {
        return view('pages.license.create-license');
    }

    //Get Active license
    public function active()
    {
        return view('pages.license.active-license');
    }

    //Get pending license
    public function pending()
    {
        return view('pages.license.pending-license');
    }

    //Get suspended license
    public function suspended()
    {
        return view('pages.license.suspended-license');
    }

    //View license
    public function view()
    {
        return view('pages.license.view-license');
    }

    //Edit license
    public function edit()
    {
        return view('pages.license.edit-license');
    }

    //Update license
    public function update()
    {
        return view('hello');
    }
}
