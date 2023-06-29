<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    protected $guarded = [];
    protected $appends = ['withdraw_id'];

    public function status()
    {
        if ($this->status == 1)
        {
            return "<span class='badge  bg-success text-white'>Successful</span>";
        }elseif($this->status == 0)
        {
            return "<span class='badge  bg-warning text-white'>Pending</span>";
        }
        return "<span class='badge  bg-danger'>Canceled</span>";

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getWithdrawIdAttribute()
    {
        return "NSB0".$this->id.'XCP10';
    }

    public function transactionType()
    {
        if ($this->domestic_transfer == 1)
        {
            return "Domestic Transfer";
        }elseif($this->mobile_deposit == 1)
        {
            return "Mobile Transfer";
        }elseif($this->wire_transfer = 1)
        {
            return "Wire Transfer";
        }
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
