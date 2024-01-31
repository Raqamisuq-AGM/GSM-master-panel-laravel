<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MailController extends Controller
{
    // Mail inbox route controller
    public function inbox(){
        return view('pages.mail.mail-inbox');
    }

    // Mail compose route controller
    public function compose(){
        return view('pages.mail.mail-compose');
    }

    // Mail read route controller
    public function read(){
        return view('pages.mail.mail-read');
    }
}
