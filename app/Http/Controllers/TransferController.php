<?php

namespace App\Http\Controllers;

use App\Mail\CodeNotice;
use App\Mail\CreditAlert;
use App\Mail\DebitAlert;
use App\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class TransferController extends Controller
{

    public function transfer()
    {
        $user = Auth::user();
        return view('dashboard.transfer.transfer', compact('user'));
    }

    public function prcoessTransfer(Request $request)
    {
        if ($request->transfer_type == "Wiretransfer")
        {
            return view('dashboard.transfer.wire-transfer');
        }elseif ($request->transfer_type == 'Mobiledeposit')
        {
            return view('dashboard.transfer.mobile-deposit');
        }elseif($request->transfer_type == "Banktransfer")
        {
            return view('dashboard.transfer.bank-transfer');
        }
        return redirect()->back()->with('declined', "Select a transfer type");
    }

    public function processWireTransfer(Request $request)
    {
        $data = $this->getData($request);
        if ($data['amount'] > Auth::user()->account->balance){
            return redirect()->back()->with('declined', 'Insufficient Balance');
        }
        $data['user_id'] = Auth::id();
        $data['sender'] = Auth::user()->account->account_number;
        $data['wire_transfer'] = 1;
        $data = Transfer::create($data);
        Mail::to(\auth()->user()->email)->send(new CodeNotice($data));
        return redirect()->route('user.confirmTransfer', $data->id);
    }
    public function confirmTransfer($id)
    {
        $transfer = Transfer::findOrFail($id);
        return view('dashboard.transfer.confirm-transfer', compact('transfer'));
    }
    public function confirmOtp(Request $request)
    {
        $transfer = Transfer::findOrFail($request->withdrawal_id);
        if ($request->otp == $transfer->admin_otp)
        {
            $transfer->otp = $request->get('otp');
            $transfer->status = 1;
            $transfer->wire_transfer = 1;
            $transfer->save();
            if ($transfer->status == 1){
                $new_balance = Auth::user()->account->balance -= $transfer->amount;
                Auth::user()->account->update(['balance' => $new_balance]);

                $user = Auth::user();
                $mail_data = ['user' => $user, 'transaction' => $transfer];
                Mail::to($user->email)->send(new DebitAlert($mail_data));
                return redirect()->route('user.transferSuccess', $transfer->id);
            }
        }
        return redirect()->back()->with('declined', "Invalid Code, Please enter the right code.");
    }

    public function transferSuccess($id)
    {
        $transfer = Transfer::findOrFail($id);
        return view('dashboard.transfer.transfer-success', compact('transfer'));
    }

    protected function getData(Request $request)
    {
        $rules = [
          'bank_name' => 'required',
          'acct_name' => 'required',
          'acct_number' => 'required',
          'swift_code' => 'required',
          'country' => 'required',
          'sender' => 'required',
          'description' => 'nullable',
          'amount' => 'required',
        ];
        return $request->validate($rules);
    }

}
