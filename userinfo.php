<?php

$con = mysqli_connect('localhost' , 'root', '', 'gym');

if($con){
    echo "Connection Successful------------------ "; 
}
else{
    echo "Connection Failed";
}
header('location:contact us.php');

mysqli_select_db($con , 'gym');
$user = $_POST['name'];
$e_mail = $_POST['email'];
$message = $_POST['message'];

$query = "insert into userinfodata (name, email, message) values('$user', '$e_mail', '$message')";

mysqli_query($con, $query);



?>