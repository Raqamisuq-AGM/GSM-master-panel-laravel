<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UILayoutController extends Controller
{
    //UI-Layout General route controller
    public function general(){
        return view('pages.ui-items.ui-general');
    }

    //UI-Layout Button route controller
    public function button(){
        return view('pages.ui-items.ui-button');
    }

    //UI-Layout Icon route controller
    public function icon(){
        return view('pages.ui-items.ui-icons');
    }

    //UI-Layout Modal & Alerts route controller
    public function modalAlert(){
        return view('pages.ui-items.ui-modal-alerts');
    }

    //UI-Layout Nav & tab route controller
    public function navTab(){
        return view('pages.ui-items.ui-nav-tab');
    }

    //UI-Layout Slider route controller
    public function slider(){
        return view('pages.ui-items.ui-slider');
    }

    //UI-Layout Timeline route controller
    public function timeline(){
        return view('pages.ui-items.ui-timeline');
    }

    //UI-Layout Ribbon route controller
    public function ribbon(){
        return view('pages.ui-items.ui-ribbon');
    }
}
