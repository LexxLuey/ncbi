<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NCBIRegistration extends Mailable
{
    use Queueable, SerializesModels;

    public $reg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($reg)
    {
        $this->reg = $reg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.NCBIRegistration');
    }
}
