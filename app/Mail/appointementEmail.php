<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class appointementEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $date;

    public function __construct($name,$date)
    {
        $this->name=$name;
        $this->date=$date;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Rendez-vous ONEE',
        );
    }

    /**
     * Get the message content definition.
     */
    public function build()
    {
        return $this->markdown('emails.client_appointement');
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
