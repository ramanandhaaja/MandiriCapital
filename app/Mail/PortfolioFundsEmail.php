<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;

class PortfolioFundsEmail extends Mailable
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
            subject: 'New Investor Enquiry - ' . ($this->formData['subject'] ?? 'Investment'),
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.portfolio_funds',
        );
    }
}
