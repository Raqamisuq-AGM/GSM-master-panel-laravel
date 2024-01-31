<?php

namespace App\Http\Controllers\Extras;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExtrasController extends Controller
{
    // Login v1 page route controller
    public function loginv1(){
        return view('pages.extras.login.login-v1');
    }

    // Login v2 page route controller
    public function loginv2(){
        return view('pages.extras.login.login-v2');
    }

    // Register v1 page route controller
    public function registerv1(){
        return view('pages.extras.register.register-v1');
    }

    // Register v2 page route controller
    public function registerv2(){
        return view('pages.extras.register.register-v2');
    }

    // Forget password v2 page route controller
    public function forgetv1(){
        return view('pages.extras.password.forget-password-v1');
    }

    // Forget password v2 page route controller
    public function forgetv2(){
        return view('pages.extras.password.forget-password-v2');
    }

    // Recover password v1 page route controller
    public function recoverv1(){
        return view('pages.extras.password.recover-password-v1');
    }

    // Recover password v2 page route controller
    public function recoverv2(){
        return view('pages.extras.password.recover-password-v2');
    }

    // Error 404 page route controller
    public function error404(){
        return view('pages.extras.error.error-404-page');
    }

    // Error 500 page route controller
    public function error500(){
        return view('pages.extras.error.error-500-page');
    }
}
