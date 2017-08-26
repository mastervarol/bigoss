<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Permohonan;

class TiketPermohonanUndagi extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The Antrian instance.
     *
     * @var Antrian
     */
    public $permohonan;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Permohonan $permohonan)
    {
        $this->permohonan = $permohonan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.emailundagi');
    }
}
