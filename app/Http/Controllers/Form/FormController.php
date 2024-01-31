<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    //Form General route controller
    public function general(){
        return view('pages.forms.form-general');
    }

    //Form Advanced route controller
    public function advanced(){
        return view('pages.forms.form-advanced');
    }

    //Form editor route controller
    public function editor(){
        return view('pages.forms.form-editor');
    }

    //Form validation route controller
    public function validation(){
        return view('pages.forms.form-validation');
    }
}
