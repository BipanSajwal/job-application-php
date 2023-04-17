<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>

<form method="post" action="process.php" enctype="multipart/form-data">
    <label>Name:</label>
    <input type="text" name="name" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label for="phone">Phone number:</label>
    <input type="tel" id="phone" name="phone" pattern="[0-9]+" required>


    <label>Resume/CV:</label>
    <input type="file" name="resume_path" required>

    <label>Cover Letter:</label>
    <textarea name="cover_letter" required></textarea>

    <input type="submit" value="Submit">
</form>

</body>
</html>