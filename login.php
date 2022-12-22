<?php
// //This script will handle login
// session_start();

// // check if the user is already logged in
// if(isset($_SESSION['username']))
// {
//     header("location: welcome.php");
//     exit;
// }
// require_once "connect.php";

// $username = $password = "";
// $err = "";

// // if request method is post
// if ($_SERVER['REQUEST_METHOD'] == "POST"){
//     if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
//     {
//         $err = "Please enter username + password";
//     }
//     else{
//         $username = trim($_POST['username']);
//         $password = trim($_POST['password']);
//     }


// if(empty($err))
// {
//     $sql = "SELECT id, username, password FROM registration WHERE username = ?";
//     $stmt = mysqli_prepare($conn, $sql);
//     mysqli_stmt_bind_param($stmt, "s", $param_username);
//     $param_username = $username;


//     // Try to execute this statement
//     if(mysqli_stmt_execute($stmt)){
//         mysqli_stmt_store_result($stmt);
//         if(mysqli_stmt_num_rows($stmt) == 1)
//                 {
//                     mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
//                     if(mysqli_stmt_fetch($stmt))
//                     {
//                         if(password_verify($password, $hashed_password))
//                         {
//                             // this means the password is corrct. Allow user to login
//                             session_start();
//                             $_SESSION["username"] = $username;
//                             $_SESSION["id"] = $id;
//                             $_SESSION["loggedin"] = true;

//                             //Redirect user to welcome page
//                             header("location: welcome.php");

//                         }
//                     }

//                 }

//     }
// }    


// }







// @include 'connect.php';

// session_start();

// if(isset($_POST['submit'])){

//    $username = mysqli_real_escape_string($conn, $_POST['username']);
//    $email = mysqli_real_escape_string($conn, $_POST['email']);
//    $password = md5($_POST['password']);
//    $confirmPassword = md5($_POST['confirmPassword']);


//    $select = " SELECT * FROM registration WHERE email = '$email' && password = '$password' ";

//    $result = mysqli_query($conn, $select);

//    if(mysqli_num_rows($result) > 0){

//       $row = mysqli_fetch_array($result);

//       if($row['username'] == 'name'){

//          $_SESSION['username'] = $row['username'];
//          header('location:welcome.php');

//     //   }elseif($row['user_type'] == 'user'){

//     //      $_SESSION['user_name'] = $row['name'];
//     //      header('location:user_page.php');

//     //   }

//    }


//    else{
//       $error[] = 'incorrect email or password!';
//    }

// }

// };



// session_start();



// $con = mysqli_connect('localhost' , 'root', '', 'gym');

// if($con){
//     echo "Connection Successful ";
// }
// else{
//     echo "Connection Failed";
// }

// mysqli_select_db($con , 'gym');
// $user = $_POST['name'];

// $pass = $_POST['password'];




// $query = "select * from  registration where username='$user' && password='$pass' ";

// // $query = "INSERT INTO registration (username, email, password, confirmPassword) 
// //         value ('$username', '$email', '$password', '$confirmPassword')";

// $result = mysqli_query($con, $query);

// $num = mysqli_num_rows($result);

// if($num == 1){

//     $_SESSION['username'] = $user;
//     header('location:welcome.php');

// }
// else{

//     header('location:login.php');
// }
// // header('location:login.php')
session_start();


?>




<html>

<head>
    <link href="style.css" rel="stylesheet" />

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Facebook Login Page Html Code With CSS (Free Download)!</title> -->
</head>
<style>
    #header_wrapper {
        background: linear-gradient(white, #D3D8E8);
    }
    #header form input[type="submit"] {
    height: 25px;
    margin-top: 20px;
    background-color: #e65100;
    color: white;
    font-weight: bold;
    border: 1px solid #e65100;
}
li{
    font-weight: bold;
}
</style>

<body>




    <div id="header_wrapper">
        <div id="header">

            <form action="validation.php" method="post">

                <li>Email or Phone<br><input type="text" name="name" oninvalid="alert('You must fill out the form!');" required></li>
                <li>Password<br><input type="password" name="password" oninvalid="alert('You must fill out the form!');" required><br><a style="color: #ff6f00; " href="">Forgotten account?</a>
                    <a style="color: #ff6f00; " href="register.php">Register</a>
                    <a style="color: #737372; margin-left: 2px;" href="index.php">Home</a>
                </li>
                <li><input type="submit" name="submit" value="Log In"></li>
            </form>

        </div>
    </div>









</body>

</html>