<!DOCTYPE html>
<html>
<head>
    <title>New Zenith Platform Application</title>
</head>
<body>
    <div>
        <h2>New Zenith Platform Application</h2>

        <div>
            <h3>Company Information</h3>
            <p><strong>Company Name:</strong> {{ $formData['company_name'] }}</p>
            <p><strong>Company Website:</strong> {{ $formData['website'] }}</p>
        </div>
        <br/>
        <div>
            <h3>Contact Information</h3>
            <p><strong>Full Name:</strong> {{ $formData['fullname'] }}</p>
            <p><strong>Email:</strong> {{ $formData['email'] }}</p>
            <p><strong>WhatsApp:</strong> {{ $formData['last_name'] }}</p>
            <p><strong>LinkedIn:</strong> {{ $formData['linkedin_url'] }}</p>
        </div>
        <br/>
        <div>
            <h3>Business Details</h3>
            <p><strong>Focus Industry:</strong> {{ $formData['focus_industry'] }}</p>
            <p><strong>Business Sector:</strong> {{ $formData['business_sector'] }}</p>
            <p><strong>Business Status:</strong> {{ $formData['business_status'] }}</p>
            <p><strong>Annual Revenue Range:</strong> {{ $formData['revenue_range'] }}</p>
            <p><strong>Operating Time:</strong> {{ $formData['operating_time'] }}</p>
            <p><strong>Employee Count:</strong> {{ $formData['employee_count'] }}</p>
            <p><strong>Established in Indonesia:</strong> {{ $formData['established_in_indonesia'] }}</p>
        </div>
    </div>
</body>
</html>
