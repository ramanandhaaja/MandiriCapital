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
        </div>
        <br/>

        <div>
            <h3>Business Information</h3>
            <p><strong>Business Name:</strong> {{ $formData['business_name'] }}</p>
            <p><strong>Market/Country:</strong> {{ $formData['market'] }}</p>
            <p><strong>Growth Stage:</strong> {{ $formData['growth_stage'] }}</p>
        </div>
        <br/>

        <div>
            <h3>Pitch Materials</h3>
            @if(isset($formData['pitch_url']))
            <p><strong>Pitch Deck URL:</strong> {{ $formData['pitch_url'] }}</p>
            @endif
            @if(isset($formData['pitch_file']))
            <p><strong>Note:</strong> Pitch deck file has been attached to this email.</p>
            @endif
        </div>
    </div>
</body>
</html>
