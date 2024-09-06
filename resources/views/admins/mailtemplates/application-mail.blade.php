<!DOCTYPE html>
<html>
<head>
    <title>Job Application Received</title>
    <style>
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 3px 5px 4px #000;
            font-family: Arial, sans-serif;
        }
        .header img {
            max-width: 100%;
            height: auto;
        }
        .content {
            padding: 20px;
            background-color: #f9f9f9;
        }
        .footer {
            padding: 10px;
            text-align: center;
            font-size: 12px;
            color: #666;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            {{-- <img src="https://pro1global.com/assets/photos/pro_1.png" alt="Company Logo"> --}}
            <a href=""><img src="https://i.ibb.co/vHCxz2m/banner2.png" alt="Pro1 Global Home Center"></a>
        </div>
        <div class="content">
            <h1>Job Application Received</h1>
            <p>Dear {{ $details['surname'] }},</p>
            <p>Thank you for applying for the {{ $details['position'] }} position at our company. We have received your application and will review it shortly.</p>
            <table>
                <tr>
                    <th>Position</th>
                    <td>{{ $details['position'] }}</td>
                </tr>

                <tr>
                    <th>Name</th>
                    <td>{{ $details['title'] }}{{ $details['surname'] }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $details['phone'] }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $details['email'] }}</td>
                </tr>

                <tr>
                    <th>Current Address</th>
                    <td>{{ $details['current_address'] }}</td>
                </tr>


                <tr>
                    <th>Emergency Address</th>
                    <td>{{ $details['emergency_address'] }}</td>
                </tr>
                <tr>
                    <th>Career Summary</th>
                    <td>{{ $details['career_summary'] }}</td>
                </tr>

                <tr>
                    <th>Expected salary</th>
                    <td>{{ $details['salary'] }}</td>
                </tr>

                <tr>
                    <th>I certify that all statements and information in this application are true in all respects</th>
                    <td>{{ $details['agree'] }}</td>
                </tr>

                <tr>
                    <th>Date</th>
                    <td>{{ $details['date'] }}</td>
                </tr>
            </table>
            <p>Best regards,</p>
            <p>
            <img src="https://pro1global.com/assets/photos/pro_1.png" alt="Pro1 Global Home Center" style="width: 80px;"><br>
            Pro1 Global Home Center</p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} Pro1 Global Home Center. All rights reserved.
        </div>
    </div>
</body>
</html>
