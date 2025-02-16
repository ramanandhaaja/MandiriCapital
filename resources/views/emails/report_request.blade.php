<!DOCTYPE html>
<html>
<head>
    <title>Publication Download Request</title>
</head>
<body>
    <h1>New Publication Download Request</h1>
    <p>A new user has requested to download a <b>{{ $publication->title }} report</b>. Here are their details:</p>

    <ul>
        <li><strong>Name:</strong> {{ $formData['name'] }}</li>
        <li><strong>Email:</strong> {{ $formData['email'] }}</li>
        <li><strong>Company Name:</strong> {{ $formData['company_name'] }}</li>
        <li><strong>Job Position:</strong> {{ $formData['position'] }}</li>
    </ul>
</body>
</html>
