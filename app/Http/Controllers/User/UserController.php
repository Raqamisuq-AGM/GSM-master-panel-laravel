<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Get All user
    public function all()
    {
        // Fetch all user from the database using the License model
        $users = User::orderByDesc('created_at')
            ->get();
        return view('pages.user.all-user', compact('users'));
    }

    //Get Active user
    public function active()
    {
        // Fetch active user from the database using the License model
        $users = User::where('status', 'active')
            ->orderByDesc('created_at')
            ->get();
        return view('pages.user.active-user', compact('users'));
    }

    //Get pending user
    public function pending()
    {
        // Fetch pending user from the database using the License model
        $users = User::where('status', 'pending')
            ->orderByDesc('created_at')
            ->get();
        return view('pages.user.pending-user', compact('users'));
    }

    //Get suspended user
    public function suspended()
    {
        // Fetch suspended user from the database using the License model
        $users = User::where('status', 'suspended')
            ->orderByDesc('created_at')
            ->get();
        return view('pages.user.suspended-user', compact('users'));
    }

    //View user
    public function view()
    {
        // Fetch user with license from the database using the License model
        $user = User::with(['licenses'])->get();
        return view('pages.user.view-user', compact('user'));
    }

    //Edit user
    public function edit()
    {
        return view('pages.user.edit-user');
    }

    //Update user status
    public function updateStatus(Request $request)
    {
        if ($request->input('status') == 'active') {
            $user = User::findOrFail($request->userID);
            $user->update([
                'status' => $request->input('status'),
            ]);
            toastr()->success('User activate successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
            return redirect()->route('user.view', ['id' => $request->userID]);
        } else {
            $user = User::findOrFail($request->suspendUserID);
            $user->update([
                'status' => $request->input('status'),
            ]);
            toastr()->success('User suspended successfully!', 'success', ['timeOut' => 5000, 'closeButton' => true]);
            return redirect()->route('user.view', ['id' => $request->suspendUserID]);
        }
    }

    //Update user
    public function update()
    {
        return view('hello');
    }
}
