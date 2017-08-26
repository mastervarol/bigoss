<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class Registered extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The Antrian instance.
     *
     * @var Antrian
     */
    public $pemohon;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $pemohon)
    {
        $this->pemohon = $pemohon;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.register');
    }
}
