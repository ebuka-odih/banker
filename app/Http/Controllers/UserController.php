<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function authenticate()
    {
        return view('dashboard.authenticate');
    }
    public function authenticated(Request $request)
    {
        $id = $request->user_id;
        $user = User::findOrFail($id);
        if ($user->pin == $request->pin)
        {
            return redirect()->route('user.dashboard');
        }
        return redirect()->back()->with('declined', 'Wrong Pin, Try Again');
    }

    public function index()
    {
        $user = Auth::user();
        return view('dashboard.index', compact('user'));
    }

    public function userDetails()
    {
        $user = Auth::user();
        return view('dashboard.user-details', compact('user'));
    }

}
