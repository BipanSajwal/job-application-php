<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Application Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
    <style>
        header {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #007bff;
        }

        .form-container {
            background-color: #f8f9fa;
            padding: 20px;
            margin: 20px auto;
            max-width: 500px;
            border-radius: 5px;
            text-align: center; /* add this line */
        }

        label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 0;
        }
        button {
            border-radius: 0;
        }
    </style>
</head>
<body>
<header>
    <h1>Welcome to NO.1 Job Provider Nepal!</h1>
</header>
<div class="container form-container">
    <h2>Please select the option that best fits your needs below:</h2>
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <button class="btn btn-primary btn-lg btn-block" onclick="location.href='login.php'">Login</button>
        </div>
        <div class="col-md-6">
            <button class="btn btn-success btn-lg btn-block" onclick="location.href='register.php'">Register Here</button>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"></script>
</body>
</html>