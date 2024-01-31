<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //Get Company setting
    public function company()
    {
        return view('pages.setting.company-setting');
    }

    //Update Company setting
    public function updateCompany()
    {
        return 'company';
    }

    //Get logo & fav setting
    public function logoFav()
    {
        return view('pages.setting.logoFav-setting');
    }

    //Update logo & fav setting
    public function UpdateLogoFav()
    {
        return 'logo';
    }

    //Get seo setting
    public function seo()
    {
        return view('pages.setting.seo-setting');
    }

    //Update seo setting
    public function updateSeo()
    {
        return 'seo';
    }

    //Get change Password setting
    public function changePassword()
    {
        return view('pages.setting.changePassword-setting');
    }

    //Update Password
    public function updatePassword()
    {
        return 'hello';
    }
}
