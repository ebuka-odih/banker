<?php

namespace App\Http\Controllers;

use App\Deposit;
use Illuminate\Http\Request;

class CreditController extends Controller
{
    public function credit()
    {
        $credit = Deposit::whereUserId(auth()->id())->get();
        return view('dashboard.deposits', compact('credit'));
    }
}
