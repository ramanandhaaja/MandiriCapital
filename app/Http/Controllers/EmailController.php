<?php

namespace App\Http\Controllers;

use App\Mail\ReportRequestEmail;
use App\Mail\ContactEmail;
use App\Mail\PortfolioGetInvestmentEmail;
use App\Mail\PortfolioFundsEmail;
use App\Mail\PlatformEmail;
use App\Mail\PlatformZenithEmail;
use App\Mail\HomeStartupEmail;
use App\Mail\HomeInvestorEmail;
use App\Models\Contact;
use App\Models\Publication;
use App\Models\PublicationEmailDownload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class EmailController extends Controller
{

    public function reportdownload(Request $request, Publication $publication)
    {
        // Validate the request

        $contact = Contact::first();

        $formData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'company_name' => 'required|string',
            'position' => 'required|string',
        ]);

        try {
            Mail::to($contact->email_form)
                ->send(new ReportRequestEmail($formData, $publication));

            return back()->with('success', 'Thank you for your request. We will contact you soon.');
        } catch (\Exception $e) {
            return back()->with('error', 'Sorry, there was an error sending your request. Please try again later.');
        }

        /*
        // Check if email already exists
        $existingDownload = PublicationEmailDownload::where('email', $validated['email'])->first();

        // If the email exists, allow download



        // Check if publication is a Whitepaper
        if ($publication->category->name === 'Whitepaper') {

            $existingDownload = PublicationEmailRegistered::where('email', $validated['email'])->first();
            if ($existingDownload) {
                return response()->download(public_path('images/report/download.png'));
            }
                return redirect()->back()->with('error', 'This content is not available for download.');


        }else{
        // else, store the email in the database
            PublicationEmailDownload::create([
                'name' => $validated['name'],
                'company_name' => $validated['company_name'],
                'email' => $validated['email'],
            ]);
            return response()->download(public_path('images/report/download.png'));
        }

        // If not a whitepaper, redirect back with error
        return redirect()->back()->with('error', 'This content is not available for download.');
        */
    }

    public function contactEmail(Request $request)
    {
        Log::info('Contact form submission received', [
            'method' => $request->method(),
            'url' => $request->url(),
            'data' => $request->all()
        ]);

        $contact = Contact::first();

        try {
            $formData = $request->validate([
                'identity' => 'required|in:startup,investor,media',
                // Startup form fields - only required if identity is startup
                'startup_name' => 'required_if:identity,startup|nullable',
                'email' => 'required_if:identity,startup|nullable|email',
                'startup_category' => 'required_if:identity,startup|nullable',
                'company_name' => 'required_if:identity,startup|nullable',
                'problem' => 'required_if:identity,startup|nullable',
                'solution' => 'required_if:identity,startup|nullable',
                'proposition' => 'required_if:identity,startup|nullable',
                'company_profile' => 'nullable|file|mimes:pdf|max:10240',
                // Other form fields - only required if identity is not startup
                'name' => 'required_unless:identity,startup|nullable',
                'other_email' => 'required_unless:identity,startup|nullable|email',
                'subject' => 'required_unless:identity,startup|nullable',
                'message' => 'required_unless:identity,startup|nullable',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation failed:', [
                'errors' => $e->errors(),
                'data' => $request->all()
            ]);
            throw $e;
        }

        Log::info('Validation passed, proceeding with email');

        // Combine email fields
        if ($request->input('identity') !== 'startup') {
            $formData['email'] = $formData['other_email'];
            unset($formData['other_email']);
        }

        // Handle file upload for startup submissions
        if ($request->hasFile('company_profile')) {
            $formData['company_profile'] = $request->file('company_profile');
        }


        try {
            Mail::to($contact->email_form)
                ->send(new ContactEmail($formData));

            Log::info('Email sent successfully.');

            return back()->with('success', 'Thank you for your message. We will contact you soon.');
        } catch (\Exception $e) {
            Log::error('Email sending failed:', ['error' => $e->getMessage()]);
            return back()->with('error', 'Sorry, there was an error sending your message. Please try again later.');
        }
    }



    public function portfolioGetInvestmentEmail(Request $request)
    {
        Log::info('Portfolio investment form submission received', [
            'method' => $request->method(),
            'url' => $request->url(),
            'data' => $request->all()
        ]);

        $contact = Contact::first();

        try {
            $formData = $request->validate([
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|string',
                'company_name' => 'required|string',
                'business_sector' => 'required|string',
                'url' => 'nullable|string',
                'company_profile' => 'nullable|file|mimes:pdf|max:10240', // max 10MB
            ]);

            if ($request->hasFile('company_profile')) {
                $formData['company_profile'] = $request->file('company_profile');
            }

            Mail::to($contact->email_form)
                ->send(new PortfolioGetInvestmentEmail($formData));

            Log::info('Investment request email sent successfully.');

            return back()->with('success', 'Thank you for your interest. We will contact you soon.');

        } catch (\Exception $e) {
            Log::error('Email sending failed:', ['error' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
            return back()->with('error', 'Sorry, there was an error sending your request. Please try again later.');
        }
    }

    public function portfolioGetFunds(Request $request)
    {
        Log::info('Portfolio funds form submission received', [
            'method' => $request->method(),
            'url' => $request->url(),
            'data' => $request->all()
        ]);

        $contact = Contact::first();

        try {
            $formData = $request->validate([
                'full_name' => 'required|string',
                'subject' => 'required|string',
                'phone' => 'required|string',
                'email' => 'required|email',
                'company_name' => 'required|string',
                'message' => 'required|string',
            ]);

            Mail::to($contact->email_form)
                ->send(new PortfolioFundsEmail($formData));

            Log::info('Funds request email sent successfully.');

            return back()->with('success', 'Thank you for your interest. We will contact you soon.');
        } catch (\Exception $e) {
            Log::error('Email sending failed:', ['error' => $e->getMessage()]);
            return back()->with('error', 'Sorry, there was an error sending your request. Please try again later.');
        }
    }


    public function platformEmail(Request $request)
    {
        Log::info('Platform form submission received', [
            'method' => $request->method(),
            'url' => $request->url(),
            'data' => $request->all()
        ]);

        $contact = Contact::first();

        try {
            $formData = $request->validate([
                'program' => 'required|string',
                'mandiri_ecosystem' => 'required|string',
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|string',
                'company_name' => 'required|string',
                'business_sector' => 'required|string',
                'url' => 'nullable|string',
                'company_profile' => 'nullable|file|mimes:pdf|max:10240', // Max 10MB
            ]);

            // Handle file upload
            if ($request->hasFile('company_profile')) {
                $formData['company_profile'] = $request->file('company_profile');
            }

            Mail::to($contact->email_form)
                ->send(new PlatformEmail($formData));

            Log::info('Platform submission email sent successfully.');

            return back()->with('success', 'Thank you for your submission. We will contact you soon.');
        } catch (\Exception $e) {
            Log::error('Platform email sending failed:', ['error' => $e->getMessage()]);
            return back()->with('error', 'Sorry, there was an error sending your submission. Please try again later.');
        }
    }

    public function platformZenithEmail(Request $request)
    {
        Log::info('Zenith Platform form submission received', [
            'method' => $request->method(),
            'url' => $request->url(),
            'data' => $request->all()
        ]);

        $contact = Contact::first();

        try {
            $formData = $request->validate([
                'email' => 'required|email',
                'company_name' => 'required|string',
                'website' => 'required|string',
                'fullname' => 'required|string',
                'linkedin_url' => 'required|string',
                'last_name' => 'required|string', // WhatsApp number
                'focus_industry' => 'required|string',
                'business_sector' => 'required|string',
                'business_status' => 'required|string',
                'revenue_range' => 'required|string',
                'operating_time' => 'required|string',
                'employee_count' => 'required|string',
                'established_in_indonesia' => 'required|string',
            ]);

            Mail::to($contact->email_form)
                ->send(new PlatformZenithEmail($formData));

            Log::info('Zenith Platform submission email sent successfully.');

            return back()->with('success', 'Thank you for your submission. We will contact you soon.');
        } catch (\Exception $e) {
            Log::error('Zenith Platform email sending failed:', ['error' => $e->getMessage()]);
            return back()->with('error', 'Sorry, there was an error sending your submission. Please try again later.');
        }
    }

    public function homeStartupEmail(Request $request)
    {
        Log::info('Home Startup form submission received', [
            'method' => $request->method(),
            'url' => $request->url(),
            'data' => $request->all()
        ]);

        $contact = Contact::first();

        try {
            // Log validation attempt
            Log::info('Validating startup form data');

            $formData = $request->validate([
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|string',
                'business_name' => 'required|string',
                'website_url' => 'nullable|url',
                'sector' => 'required|string',
                'pitch_file' => 'nullable|file|mimes:pdf,doc,docx,ppt,pptx|max:10240', // Max 10MB
            ]);

            // Log successful validation
            Log::info('Form data validated successfully', ['formData' => array_keys($formData)]);

            // Handle file upload
            if ($request->hasFile('pitch_file')) {
                Log::info('Processing pitch file upload');
                $formData['pitch_file'] = $request->file('pitch_file');
                Log::info('Pitch file processed successfully', [
                    'filename' => $formData['pitch_file']->getClientOriginalName(),
                    'size' => $formData['pitch_file']->getSize()
                ]);
            }

            // Log email attempt
            Log::info('Attempting to send startup email');

            Mail::to($contact->email_form)
                ->send(new HomeStartupEmail($formData));

            Log::info('Home Startup submission email sent successfully.');

            return response()->json([
                'status' => 'success',
                'message' => 'Thank you for your submission. We will contact you soon.'
            ]);
        } catch (ValidationException $e) {
            Log::error('Startup form validation failed:', [
                'errors' => $e->errors(),
                'message' => $e->getMessage()
            ]);
            return response()->json([
                'status' => 'error',
                'message' => 'Please check your input and try again.',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            Log::error('Home Startup email sending failed:', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'status' => 'error',
                'message' => 'Sorry, there was an error sending your submission. Please try again later.'
            ], 500);
        }
    }

    public function homeInvestorEmail(Request $request)
    {
        Log::info('Home Investor form submission received', [
            'method' => $request->method(),
            'url' => $request->url(),
            'data' => $request->all()
        ]);

        $contact = Contact::first();

        try {
            $formData = $request->validate([
                'full_name' => 'required|string',
                'investor_email' => 'required|email',
                'phone' => 'required|string',
                'subject' => 'required|string',
                'company' => 'required|string',
                'message' => 'required|string',
            ]);

            Mail::to($contact->email_form)
                ->send(new HomeInvestorEmail($formData));

            Log::info('Home Investor submission email sent successfully.');

            return response()->json([
                'status' => 'success',
                'message' => 'Thank you for your submission. We will contact you soon.'
            ]);
        } catch (\Exception $e) {
            Log::error('Home Investor email sending failed:', ['error' => $e->getMessage()]);
            return response()->json([
                'status' => 'error',
                'message' => 'Sorry, there was an error sending your submission. Please try again later.'
            ], 422);
        }
    }

}
