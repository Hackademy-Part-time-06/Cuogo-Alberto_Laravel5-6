<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class InfoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function envelope()
    {
        return new Envelope(
            from: new Address('info@ironfit.it', 'IRON FIT'),
            subject: 'Richiesta informazioni'
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'send.mail'
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
