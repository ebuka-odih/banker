<?php

namespace App\Http\Controllers;

use App\Mail\ChangePin;
use App\Rules\MatchOldPassword;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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

    public function security()
    {
        return view('dashboard.security');
    }
    public function storePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password), 'pass' => $request->new_password]);
        return redirect()->back()->with('success', "Password Changed Successfully");
    }

    function generatePin() {
        $pin = mt_rand(100000, 999999);
        return strval($pin);
    }

    public function changePin(Request $request)
    {
        if ($request->pass == \auth()->user()->pass)
        {
          $user = User::findOrFail(\auth()->id());
          $user->update(['pin' => $this->generatePin()]);
          Mail::to(\auth()->user()->email)->send(new ChangePin($user));
          return redirect()->back()->with('success_pin', "A New Pin Has Been Sent To Your Email");
        }
        return redirect()->back()->with('decline', "Incorrect Password");
    }

}
