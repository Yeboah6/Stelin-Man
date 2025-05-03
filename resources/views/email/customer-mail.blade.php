<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #1a1818;
            max-width: 600px;
            margin: 0 auto;
        }
        .container {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .header {
            background-color: #f5f5f5;
            padding: 10px;
            border-radius: 5px 5px 0 0;
            margin-bottom: 20px;
        }

        h2 {
            text-align: center;
        }

        .footer {
            margin-top: 20px;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 0 0 5px 5px;
            font-size: 16px;
            text-align: center;
        }
        .field {
            margin-bottom: 15px;
        }
        .field-label {
            font-weight: bold;
        }
        .message {
            padding: 10px;
            background-color: #f9f9f9;
            border-left: 3px solid #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2 style="text-align: center;">New Contact Form Submission</h2>
        </div>
        
        <div class="field">
            <div class="field-label">Name:</div>
            <div>{{$data['name']}}</div>
        </div>
        
        <div class="field">
            <div class="field-label">Email:</div>
            <div>{{ $data['email'] }}</div>
        </div>
        
        <div class="field">
            <div class="field-label">Subject:</div>
            <div>{{ $data['subject'] ?? 'No subject' }}</div>
        </div>
        
        <div class="field">
            <div class="field-label">Message:</div>
            <div class="message">{{ $data['message'] }}</div>
        </div>
        
        <div class="footer">
            This email was sent from the contact form on your website.
        </div>
    </div>
</body>
</html>