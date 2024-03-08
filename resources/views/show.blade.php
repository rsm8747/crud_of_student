<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            margin: 10px 0;
        }

        strong {
            font-weight: bold;
        }

        .back-btn {
            display: block;
            margin-top: 20px;
            text-align: center;
        }

        .back-btn a {
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .back-btn a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Student Details</h1>
        <p><strong>Name:</strong> {{ $student->stdName }}</p>
        <p><strong>Age:</strong> {{ $student->stdAge }}</p>
        <p><strong>Phone:</strong> {{ $student->stdPhone }}</p>
        <p><strong>Address:</strong> {{ $student->stdAddress }}</p>
        
        <div class="back-btn">
            <a href="javascript:history.back()">Back</a>
        </div>
    </div>
</body>
</html>
