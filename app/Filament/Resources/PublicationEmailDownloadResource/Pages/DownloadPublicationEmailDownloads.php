<?php

namespace App\Filament\Resources\PublicationEmailDownloadResource\Pages;

use App\Filament\Resources\PublicationEmailDownloadResource;
use Filament\Resources\Pages\Page;
use Illuminate\Http\Response;
use App\Models\PublicationEmailDownload;

class DownloadPublicationEmailDownloads extends Page
{
    protected static string $resource = PublicationEmailDownloadResource::class;

    public function downloadAll(): Response
    {
        $downloads = PublicationEmailDownload::all();

        // Create a CSV file
        $csvFileName = 'publication_email_downloads.csv';
        $handle = fopen('php://output', 'w');

        // Set headers for download
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename=' . $csvFileName);

        // Add CSV header
        fputcsv($handle, ['Name', 'Company Name', 'Email']);

        // Add data to CSV
        foreach ($downloads as $download) {
            fputcsv($handle, [$download->name, $download->company_name, $download->email]);
        }

        fclose($handle);
        exit;
    }
}
