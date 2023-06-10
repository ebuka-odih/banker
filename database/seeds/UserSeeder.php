<?php

use App\Account;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function autoCreate($user_id){
        $accounts = Account::orderBy('created_at', 'desc')->first();
        if($accounts){
            $last_account_num = $accounts->account_number ;
        }else {
            $last_account_num = '1000000000';
        }

        $account_num = (int)$last_account_num + 1;

        $save = Account::create(['user_id' => $user_id, 'account_number' => $account_num]);

        $user = User::findOrFail($user_id);

    }

    function generatePin() {
        $pin = mt_rand(100000, 999999); // Generate a random number between 100000 and 999999
        return strval($pin); // Convert the number to a string and return it
    }

    public function run()
    {
        $user = User::where('email', '=', 'user@lifepaytrust.com')->first();
        if($user === null){
            $user3 = User::create([
                'first_name' => 'LifePay',
                'last_name' => 'User',
                'email' => 'user@lifepaytrust.com',
                'status' => 1,
                'pin' => $this->generatePin(),
                'user_role' => 0,
                'account_type' => "Savings",
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => Hash::make('lifepaytrust33'),
            ]);
            $this->autoCreate($user3->id);
        }

    }
}
