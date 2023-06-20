<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Notifications\OTPCode;
use App\Transfer;
use App\User;
use App\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class AdminTransfers extends Controller
{
    public function wireTransactions()
    {
        if (Transfer::where('wire_transfer', 1)){
            $transfer = Transfer::where('wire_transfer', 1)->get();
            return view('admin.transfers.wire-history', compact('transfer'));
        }
        $transfer = Withdrawal::where('wire_transfer', 1)->get();
        return view('admin.transfers.wire-history', compact('transfer'));
    }
    public function transferDetails($id)
    {
        $transfer = Transfer::findOrFail($id);
        return view('admin.transfers.transfer-details', compact('transfer'));
    }
    public function admin_otp(Request $request, $id)
    {
        $wit = Transfer::findOrFail($id);
        $user = User::findOrFail($wit->user_id);
        $user_email = $user->email;
        $wit->admin_otp = $request->get('admin_otp');
        $data = ['user' => $user, 'wit' => $wit];
        Notification::route('mail', $user_email)->notify(new OTPCode($data));
        $wit->save();
        return redirect()->back()->with('admin_nsb_code', "OTP Code Sent Successfully");
    }

}
