<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CreditAlert extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $mail_data;
    public function __construct($mail_data)
    {
        $this->mail_data = $mail_data;
    }

    public function build()
    {


        return $this->from('noreply@lifepaytrust.com')
            ->subject(env('APP_NAME'))
            ->markdown('emails.credit-alert');
    }

}
