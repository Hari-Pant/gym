<?php

session_start();

?>


<html>

<head>
    <link href="style.css" rel="stylesheet" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Create an account</title>
</head>

<body>

    <div id="wrapper">

        <div id="div1">

        </div>

        <div id="div2">
            <form action="connect.php" method="post">
            <h1>Create an account</h1>
            

            <p>It's free and always will be. <a style="color: #737372; margin-left: 2px; text-decoration: none;" href="index.php">Home</a></p>
            <li><input type="text" placeholder="User Name" id="Firstname" name="name"  required></li>
            <li><input type="text" placeholder="Mobile number or email" name="email" required></li>
            <li><input type="password" placeholder="New password" name="password"  required></li>
            <li><input type="password" placeholder="Confirm password" name="confirmPassword"  required></li>
            
            
            <input style="background-color: #e65100; font-weight: bold;
    border: 1px solid #e65100;" type="submit" name="submit" value="Register Now" class="btn btn-success mt-3" oninvalid="alert('You must fill out the form!');">
            <p>already have an account? <a style="color: #ff6f00; text-decoration: none; " href="login.php">login now</a></p>
            
        </form>
        </div>

    </div>


    </div>

    
</body>

</html>
