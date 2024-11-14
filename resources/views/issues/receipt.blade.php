<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
            position: relative;
        }
        .header h3 {
            display: inline-block;
            margin: 0;
        }
        .header p {
            margin: 5px 0;
        }
        .header .logo-left, .header .logo-right {
            width: 80px; /* Adjust width as needed */
            position: absolute;
            top: 0;
        }
        .header .logo-left {
            left: 0;
        }
        .header .logo-right {
            right: 0;
        }
        .content {
            width: 100%;
            margin: 0 auto;
        }
        .content table {
            width: 100%;
            border-collapse: collapse;
        }
        .content th, .content td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        .signatures {
            margin-top: 20px;
        }
        .signatures .left, .signatures .right {
            width: 45%;
            display: inline-block;
        }
        .signatures .right {
            float: right;
        }
        .signatures .left {
            float: left;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ $paklogoBase64 }}" alt="Logo" class="logo-left">  
        <h3>
            NATIONAL DISASTER MANAGEMENT AUTHORITY<br>
            PRIME MINISTER'S OFFICE<br>
            ISLAMABAD
        </h3>
        <img src="{{$logoBase64}}" alt="Logo" class="logo-right">
        <p>Date: {{ \Carbon\Carbon::parse($issue->issue_date)->format('Y-m-d') }}</p>
    </div>
    <div class="content">
        <table>
            <thead>
                <tr>
                    <th>Item Code</th>
                    <th>Description</th>
                    <th>Qty</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $issue->item->item_code }}</td>
                    <td>{{ $issue->item->item_desp }}</td>
                    <td>{{ $issue->quantity_issued }}</td>
                    <td>{{ $issue->remarks }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="signatures">
        <div class="left">
            <p>Handing over by:</p>
            <p>{{ optional($issue->issueByEmployee)->employee_name ?? '' }}</p>
            <p>Signature: ________________</p>
        </div>
        <div class="right">
            <p>Taken over by:</p>
            <p>Name: {{ optional($issue->issueToEmployee)->employee_name ?? '' }}</p>
            <p>Signature: ________________</p>
        </div>
    </div>
</body>
</html>
