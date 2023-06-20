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
            return "<span class='badge rounded-pill bg-success'>Successful</span>";
        }elseif($this->status == 0)
        {
            return "<span class='badge rounded-pill bg-warning'>Pending</span>";
        }
        return "<span class='badge rounded-pill bg-danger'>Canceled</span>";

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
        if ($this->trans_type == "domestic_transfer")
        {
            return "Domestic Transfer";
        }elseif($this->trans_type == "mobile_deposit")
        {
            return "Mobile Transfer";
        }elseif($this->trans_type = "wire_transfer")
        {
            return "Wire Transfer";
        }
    }

    public function transId()
    {
        return "#".$this->id."5366";
    }
}
