<?php
$host='localhost';
$username="root";
$password="";
$database="dss";

$conn=mysqli_connect($host,$username,$password,$database);

if(!$conn){
}else{
    if(!$conn){
        echo "Failed";
    }else{
        $query = "SELECT * FROM users WHERE name= '" .$_POST['name']. "'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            $data=mysqli_fetch_assoc($result);
            if(password_verify($_POST['password'],$data['password'])){
                echo 'Successfully Logged in';
                header('Location:job_application.php');
            }else{
                echo 'password incorrect';
            }
        }else{
            echo 'user not found';
        }
    }
}
