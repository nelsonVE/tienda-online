<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VerificacionEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $mail;

    public function __construct($mail)
    {
        $this->mail = $mail;
    }

    public function build()
    {
        return $this->from('enviar@ejemplo.com')
                    ->view('email.verificacion')
                    ->text('email.verificacion_plain')
                    ->with([
                        'key' => $this->mail->key,
                        'usuario' => $this->mail->username
                    ]);
    }
}
