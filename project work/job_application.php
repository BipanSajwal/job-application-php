<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Job Application Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        form {
            background-color: #fff;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 40px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #f2f2f2;
            margin-bottom: 20px;
        }

        input[type="file"] {
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
<h1>Job Application Form</h1>
<form method="post" action="insert.php" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="phone">Phone number:</label>
    <input type="tel" id="phone" name="phone" pattern="[0-9]+" required>

    <label for="resume">Resume/CV:</label>
    <input type="file" id="resume" name="resume_path" required>

    <label for="cover-letter">Cover Letter:</label>
        <br>
        <textarea name="cover_letter" id="cover_letter" rows="3" required style="resize: none"></textarea>
        <br>
        <input type="submit" value="Submit">

    <input type="submit" value="Submit">
</form>
</body>
</html>
