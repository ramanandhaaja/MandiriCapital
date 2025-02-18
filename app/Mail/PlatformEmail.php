<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Attachment;

class PlatformEmail extends Mailable
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
            from: new Address('MS_06VHji@trial-3vz9dleok16gkj50.mlsender.net', 'Mandiri Capital Indonesia'),
            subject: 'New Platform Submission - ' . $this->formData['program'],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.platform',
        );
    }

    public function attachments(): array
    {
        $attachments = [];
        if (isset($this->formData['company_profile'])) {
            $attachments[] = $this->formData['company_profile'];
        }
        return $attachments;
    }
}
