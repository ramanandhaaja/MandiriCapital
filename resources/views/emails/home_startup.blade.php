<!DOCTYPE html>
<html>
<head>
    <title>New Startup Pitch Submission</title>
</head>
<body>
    <div>
        <h2>New Startup Pitch Submission</h2>

        <div>
            <h3>Personal Information</h3>
            <p><strong>Name:</strong> {{ $formData['first_name'] }} {{ $formData['last_name'] }}</p>
            <p><strong>Email:</strong> {{ $formData['email'] }}</p>
            <p><strong>Phone:</strong> {{ $formData['phone'] }}</p>
        </div>
        <br/>

        <div>
            <h3>Business Information</h3>
            <p><strong>Company Name:</strong> {{ $formData['business_name'] }}</p>
            @if(isset($formData['website_url']))
            <p><strong>Company Website:</strong> {{ $formData['website_url'] }}</p>
            @endif
            <p><strong>Business Sector:</strong> {{ $formData['sector'] }}</p>
        </div>
        <br/>

        <div>
            <h3>Pitch Materials</h3>
            @if(isset($formData['pitch_file']))
            <p><strong>Note:</strong> Pitch deck file has been attached to this email.</p>
            @endif
        </div>
    </div>
</body>
</html>
