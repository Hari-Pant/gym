<?php


session_start();



$con = mysqli_connect('localhost' , 'root', '', 'gym');

if($con){
    echo "Connection Successful---------------- ";
}
else{
    echo "Connection Failed";
}

mysqli_select_db($con , 'gym');
$user = $_POST['name'];

$pass = $_POST['password'];




$query = "select * from  registration where username='$user' && password='$pass' ";

// $query = "INSERT INTO registration (username, email, password, confirmPassword) 
//         value ('$username', '$email', '$password', '$confirmPassword')";

$result = mysqli_query($con, $query);

$num = mysqli_num_rows($result);

if($num == 1){

    $_SESSION['username'] = $user;
    
    
    header('location:welcome1.php');

}
else{

    echo "Invalid Username and Password";
}
// header('location:login.php')


?>