<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Invoice page route controller
    public function invoice(){
        return view('pages.page.invoice-page');
    }

    // Profile route controller
    public function profile(){
        return view('pages.page.profile-page');
    }

    // E-commerce page route controller
    public function eCommerce(){
        return view('pages.page.ecommerce-page');
    }

    // Project page route controller
    public function project(){
        return view('pages.page.project-page');
    }

    // Project edit route controller
    public function projectEdit(){
        return view('pages.page.project-edit-page');
    }

    // Project add route controller
    public function projectAdd(){
        return view('pages.page.project-add-page');
    }

    // Project detail route controller
    public function projectDetail(){
        return view('pages.page.project-detail-page');
    }

    // Contacts page route controller
    public function contacts(){
        return view('pages.page.contacts-page');
    }

    // Faq page route controller
    public function faq(){
        return view('pages.page.faq-page');
    }

    // Contact us route controller
    public function contactUs(){
        return view('pages.page.contact-us-page');
    }
}
