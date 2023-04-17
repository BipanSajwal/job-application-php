<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "dss";

$fileName = basename($_FILES["resume_path"]["name"]);
$saveTo='image/'.$fileName;
$temp_name=$_FILES["resume_path"]["tmp_name"];
move_uploaded_file($temp_name,$saveTo);

$conn = mysqli_connect($host, $username, $password, $database);
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$resume_path = $fileName;
$cover_letter = $_POST["cover_letter"];

if (!$conn) {
    echo "Failed to connect to database";
} else {
    $query = "INSERT INTO job_applications (name, phone, resume_path, cover_letter) VALUES ('$name', '$phone', '$resume_path', '$cover_letter')";
    if (mysqli_query($conn, $query)) {
        echo "Data inserted successfully";
    } else {
        echo "Data insertion failed";
    }
}

header('Location: job_application.php');
