<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;

class ReportRequestEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;
    public $publication;

    public function __construct($formData, $publication)
    {
        $this->formData = $formData;
        $this->publication = $publication;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(env('MAIL_FROM_ADDRESS'), 'Mandiri Capital Indonesia'),
            subject: 'New Report Download Request',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.report_request',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
