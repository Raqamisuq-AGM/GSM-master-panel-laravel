<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Company\Admin;
use App\Models\Company\Company;
use App\Models\Company\CompanyNotification;
use App\Models\Company\CompanySeo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    //Get Company setting
    public function company()
    {
        // Fetch company details from the database
        $company = Company::all();
        return view('pages.setting.company-setting', compact('company'));
    }

    //Update Company setting
    public function updateCompany(Request $request)
    {
        $company = Company::findOrFail(1);

        if ($request->hasFile('logo')) {
            // Store the uploaded file in the public directory
            $file = $request->file('logo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/img/logo'), $fileName);

            $company->update([
                'logo' => $fileName,
            ]);
        }

        if ($request->hasFile('fav')) {
            // Store the uploaded file in the public directory
            $favFile = $request->file('fav');
            $favFileName = time() . '_' . $favFile->getClientOriginalName();
            $favFile->move(public_path('assets/img/logo'), $favFileName);

            $company->update([
                'favicon' => $favFileName,
            ]);
        }

        $company->update([
            'company_name' => $request->input('company_name'),
            'email' => $request->input('email'),
            'phon' => $request->input('phon'),
            'whatsapp' => $request->input('whatsapp'),
            'telegram_id' => $request->input('telegram_id'),
            'address' => $request->input('address'),
            'state' => $request->input('state'),
            'zip' => $request->input('zip'),
            'country' => $request->input('country'),
            'language' => $request->input('language'),
        ]);
        toastr()->success('Details updated successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('setting.company');
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
        // Fetch company seo details from the database
        $company = CompanySeo::all();
        return view('pages.setting.seo-setting', compact('company'));
    }

    //Update seo setting
    public function updateSeo(Request $request)
    {

        $company = CompanySeo::findOrFail(1);
        $company->update([
            'author' => $request->input('author'),
            'title' => $request->input('title'),
            'meta_description' => $request->input('meta_description'),
            'keyword' => $request->input('keyword'),
        ]);
        toastr()->success('SEO details updated successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('setting.seo');
    }

    //Get change Password setting
    public function changePassword()
    {
        return view('pages.setting.changePassword-setting');
    }

    //Update Password
    public function updatePassword(Request $request)
    {
        $request->validate([
            'newPassword' => 'required|min:8',
            'confirmPassword' => 'required|same:newPassword',
        ]);

        $admin = Admin::findOrFail(1);
        $admin->update([
            'password' => Hash::make($request->newPassword),
        ]);
        toastr()->success('Password updated successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('setting.change-password');
    }

    //Get login admin
    public function loginForm()
    {
        return view('pages.login.admin-login');
    }

    //Submit admin login form
    public function submitLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admins')->attempt($credentials)) {
            return redirect()->intended('/');
        }

        return back()->withErrors(['invalid_credential' => 'Invalid credentials']);
    }

    //Get forget password admin
    public function forgetPassword()
    {
        return view('pages.login.forget-password');
    }

    //Get forget code admin
    public function forgetCode()
    {
        return view('pages.login.forget-code');
    }

    //Get forget password admin
    public function forgetUpdatePassword()
    {
        return view('pages.login.update-password');
    }

    //Logout admin
    public function logout(Request $request)
    {
        Auth::guard('admins')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    //Get all notification
    public function allNotification()
    {
        // Fetch company details from the database
        $companyNotifications = CompanyNotification::all();
        return view('pages.setting.company-notification', compact('companyNotifications'));
    }

    //Mark all notification as read
    public function markAllAsRead()
    {
        // Update all rows in the notifications table to mark them as read
        CompanyNotification::where('status', 'unread')->update(['status' => 'read']);
        toastr()->success('All notifications marked as read', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return back();
    }
}
