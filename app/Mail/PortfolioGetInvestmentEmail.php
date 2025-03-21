<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;

class PortfolioGetInvestmentEmail extends Mailable
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
            subject: 'New Investment Request - ' . ($this->formData['company_name'] ?? 'Company'),
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.portfolio_get_investment',
        );
    }

    public function attachments(): array
    {
        if (!isset($this->formData['company_profile']) || !($this->formData['company_profile'] instanceof \Illuminate\Http\UploadedFile)) {
            return [];
        }

        $file = $this->formData['company_profile'];

        // Sanitize filename by removing special characters
        $originalName = $file->getClientOriginalName();
        $sanitizedName = preg_replace('/[^a-zA-Z0-9._-]/', '', $originalName);

        return [
            \Illuminate\Mail\Mailables\Attachment::fromPath($file->getRealPath())
                ->as($sanitizedName)
                ->withMime($file->getMimeType())
        ];
    }
}
