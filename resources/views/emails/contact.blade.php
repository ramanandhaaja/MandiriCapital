<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form Submission</title>
</head>
<body>
    <h1>New Contact Form Submission</h1>
    <p>A new contact form submission has been received from a <b>{{ $formData['identity'] }}</b>.</p>

    @if($formData['identity'] === 'startup')
    <h2>Startup Information</h2>
    <ul>
        <li><strong>Startup Name:</strong> {{ $formData['startup_name'] }}</li>
        <li><strong>Email:</strong> {{ $formData['email'] }}</li>
        <li><strong>Startup Category:</strong> {{ $formData['startup_category'] }}</li>
        <li><strong>Company Name:</strong> {{ $formData['company_name'] }}</li>
    </ul>

    <h3>Problem Statement</h3>
    <p>{{ $formData['problem'] }}</p>

    <h3>Solution</h3>
    <p>{{ $formData['solution'] }}</p>

    <h3>Value Proposition</h3>
    <p>{{ $formData['proposition'] }}</p>

    <p><strong>Note:</strong> Company profile/pitch deck is attached to this email.</p>

    @else
    <h2>Contact Information</h2>
    <ul>
        <li><strong>Name:</strong> {{ $formData['name'] }}</li>
        <li><strong>Email:</strong> {{ $formData['email'] }}</li>
        <li><strong>Subject:</strong> {{ $formData['subject'] }}</li>
    </ul>

    <h3>Message</h3>
    <p>{{ $formData['message'] }}</p>
    @endif
</body>
</html>
