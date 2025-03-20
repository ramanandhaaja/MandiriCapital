<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;

class HomeStartupEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;

    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(env('MAIL_FROM_ADDRESS'), 'Mandiri Capital Indonesia'),
            subject: 'New Startup Pitch Submission - ' . $this->formData['business_name'],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.home_startup',
        );
    }

    public function attachments(): array
    {
        $attachments = [];
        if (isset($this->formData['pitch_file'])) {
            $attachments[] = $this->formData['pitch_file'];
        }
        return $attachments;
    }
}
