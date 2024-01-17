<?php

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
