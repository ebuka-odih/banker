<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    //
    protected $guarded = [];

    public function user()
    {
       return $this->belongsTo(User::class);
    }

    public function status()
    {
        if ($this->status < 0)
        {
            return "<span class='badge bg-danger text-white'>Declined</span>";
        }
        elseif($this->status == 0)
        {
            return "<span class='badge  bg-warning text-white'>Pending</span>";
        }
        return "<span class='badge bg-success text-white'>Successful</span>";
    }

    function generatePin() {
        $pin = mt_rand(1000000000000, 99999999999999);
        return strval($pin);
    }

    public function transId()
    {
        return $this->id.$this->generatePin();
    }



}
