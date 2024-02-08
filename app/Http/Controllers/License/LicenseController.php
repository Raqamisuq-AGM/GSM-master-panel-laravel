<?php

namespace App\Http\Controllers\License;

use App\Http\Controllers\Controller;
use App\Models\License\License;
use App\Models\Product\Product;
use App\Models\User\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;

class LicenseController extends Controller
{
    //Get All license
    public function all()
    {
        // Fetch all licenses from the database using the License model
        $licenses = License::with(['product', 'user'])->orderByDesc('created_at')
            ->get();

        // Pass the fetched data to the view
        return view('pages.license.all-license', compact('licenses'));
    }

    //Add license
    public function create()
    {
        // Fetch all categories for the dropdown
        $users = User::all();
        $products = Product::all();
        return view('pages.license.create-license', compact('users', 'products'));
    }

    //Store license
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'user' => 'required',
            'product' => 'required',
            'package' => 'required',
            'status' => 'required',
            'package' => 'required',
            'domain' => 'required',
        ]);

        $currentTimestamp = now();

        // Calculate next_due based on the selected package
        $package = $request->input('package');
        switch ($package) {
            case '1':
                $nextDue = $currentTimestamp->addMonth();
                break;
            case '6':
                $nextDue = $currentTimestamp->addMonths(6);
                break;
            case '12':
                $nextDue = $currentTimestamp->addYear();
                break;
            default:
                $nextDue = $currentTimestamp;
                break;
        }

        // Generate a unique license code
        $licenseCode = $this->generateUniqueLicenseCode();

        // Update the subcategory in the database
        $license = new License();
        $license->status = $request->input('status');
        $license->user_id = $request->input('user');
        $license->product_id = $request->input('product');
        $license->license_at = $currentTimestamp;
        $license->next_due = $nextDue;
        $license->package = $request->input('package');
        $license->domain_reg = $request->input('domain');
        $license->license_code = $licenseCode;
        $license->save();

        toastr()->success('License created successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('license.all');
    }

    //Get Active license
    public function active()
    {
        // Fetch all licenses from the database using the License model
        $licenses = License::with(['product', 'user'])
            ->where('status', 'active')
            ->orderByDesc('created_at')
            ->get();
        return view('pages.license.active-license', compact('licenses'));
    }

    //Get pending license
    public function pending()
    {
        // Fetch all licenses from the database using the License model
        $licenses = License::with(['product', 'user'])
            ->where('status', 'pending')
            ->orderByDesc('created_at')
            ->get();
        return view('pages.license.pending-license', compact('licenses'));
    }

    //Get suspended license
    public function suspended()
    {
        // Fetch all licenses from the database using the License model
        $licenses = License::with(['product', 'user'])
            ->where('status', 'suspended')
            ->orderByDesc('created_at')
            ->get();
        return view('pages.license.suspended-license', compact('licenses'));
    }

    //View license
    public function view($id)
    {
        // Fetch subcategory data from the database based on $id
        $license = License::find($id);

        return view('pages.license.view-license', compact('license'));
    }

    //Edit license
    public function edit($id)
    {
        // Fetch subcategory data from the database based on $id
        $license = License::find($id);

        // Fetch all categories for the dropdown
        $users = User::all();
        $products = Product::all();
        return view('pages.license.edit-license', compact('license', 'users', 'products'));
    }

    //Update license
    public function update(Request $request, $id)
    {

        // Validate the request data
        $request->validate([
            'status' => 'required',
        ]);

        // Update the subcategory in the database
        $license = License::findOrFail($id);
        $license->update([
            'status' => $request->input('status'),
        ]);
        toastr()->success('License updated successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('license.all');
    }

    //Update license
    public function delete(Request $request)
    {
        $license = License::findOrFail($request->ItemID);
        $license->delete();

        toastr()->success('License deleted successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
        return redirect()->route('license.all');
    }

    // Function to generate a unique license code
    private function generateUniqueLicenseCode()
    {
        do {
            $licenseCode = Str::random(3) . '*' . Str::random(3) . '#' . Str::random(4) . '26';
        } while (License::where('license_code', $licenseCode)->exists());

        return $licenseCode;
    }
}
