<!DOCTYPE html>
<html>
<head>
    <title>New Investor Inquiry</title>
</head>
<body>
    <div>
        <h2>New Investor Inquiry</h2>

        <div>
            <h3>Contact Information</h3>
            <p><strong>Full Name:</strong> {{ $formData['full_name'] }}</p>
            <p><strong>Email:</strong> {{ $formData['investor_email'] }}</p>
            <p><strong>Phone:</strong> {{ $formData['phone'] }}</p>
        </div>
        <br/>

        <div>
            <h3>Inquiry Details</h3>
            <p><strong>Subject:</strong> {{ $formData['subject'] }}</p>
            <p><strong>Company:</strong> {{ $formData['company'] }}</p>
        </div>
        <br/>

        <div>
            <h3>Message</h3>
            <p>{{ $formData['message'] }}</p>
        </div>
    </div>
</body>
</html>
