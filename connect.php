<?php

session_start();



$con = mysqli_connect('localhost' , 'root', '', 'gym');

if($con){
    echo "Connection Successful------------------ "; 
}
else{
    echo "Connection Failed";
}

mysqli_select_db($con , 'gym');
$user = $_POST['name'];
$e_mail = $_POST['email'];
$pass = $_POST['password'];
$cPassword = $_POST['confirmPassword'];

if ($_POST['password'] !== $_POST['confirmPassword']) {
    die('Password and Confirm password should match!');   
 }

 
 


$query = "select * from  registration where username='$user' && email='$e_mail'   ";


// $query = "INSERT INTO registration (username, email, password, confirmPassword) 
//         value ('$username', '$email', '$password', '$confirmPassword')";

$result = mysqli_query($con, $query);

$num = mysqli_num_rows($result);


if($num == 1){
    echo 'Dublicate Data';
}
else{
    $q = "INSERT INTO registration (username,email, password, confirmPassword)  value ('$user', '$e_mail ' , '$pass', '$cPassword')";
    
    
    mysqli_query($con, $q);
    header('location:login.php');
}



?>



