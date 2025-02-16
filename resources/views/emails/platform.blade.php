<!DOCTYPE html>
<html>
<head>
    <title>New Platform Submission</title>
</head>
<body>
    <div>
        <h2>New Platform Submission</h2>

        <div>
            <h3>Program Details</h3>
            <p><strong>Program:</strong> {{ $formData['program'] }}</p>
            <p><strong>Mandiri Ecosystem:</strong> {{ $formData['mandiri_ecosystem'] }}</p>
        </div>
        <br/>
        <div>
            <h3>Contact Information</h3>
            <p><strong>Name:</strong> {{ $formData['first_name'] }} {{ $formData['last_name'] }}</p>
            <p><strong>Email:</strong> {{ $formData['email'] }}</p>
            <p><strong>Phone:</strong> {{ $formData['phone'] }}</p>
        </div>
<br/>
        <div>
            <h3>Company Information</h3>
            <p><strong>Company Name:</strong> {{ $formData['company_name'] }}</p>
            <p><strong>Website URL:</strong> {{ $formData['url'] }}</p>
            <p><strong>Business Sector:</strong> {{ $formData['business_sector'] }}</p>
        </div>

        @if(isset($formData['company_profile']))
        <div>
            <h3>Attachments</h3>
            <p>Company Profile/Pitch Deck has been attached to this email.</p>
        </div>
        @endif
    </div>
</body>
</html>
