<!DOCTYPE html>
<html>
<head>
    <title>New Investment Request</title>
</head>
<body>
    <div>
        <h2>New Investment Request</h2>

        <div>
            <h3>Contact Information</h3>
            <p><strong>Name:</strong> {{ $formData['first_name'] ?? '' }} {{ $formData['last_name'] ?? '' }}</p>
            <p><strong>Email:</strong> {{ $formData['email'] ?? '' }}</p>
            <p><strong>Phone:</strong> {{ $formData['phone'] ?? '' }}</p>
        </div>
        <br/>
        <div>
            <h3>Company Information</h3>
            <p><strong>Company Name:</strong> {{ $formData['company_name'] ?? '' }}</p>
            <p><strong>Business Sector:</strong> {{ $formData['business_sector'] ?? '' }}</p>
            @if(isset($formData['url']) && $formData['url'])
            <p><strong>Company Website:</strong> {{ $formData['url'] }}</p>
            @endif
        </div>
        <br/>
        @if(isset($formData['company_profile']))
        <div>
            <p><strong>Note:</strong> A company profile/pitch deck has been attached to this email.</p>
        </div>
        @endif

    </div>
</body>
</html>
