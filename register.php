<?php

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
// $e_mail = $_POST['email'];
// $pass = $_POST['password'];
// $cPassword = $_POST['confirmPassword'];



// $query = "select * from  registration where username='$user' && password='$pass' ";

// // $query = "INSERT INTO registration (username, email, password, confirmPassword) 
// //         value ('$username', '$email', '$password', '$confirmPassword')";

// $result = mysqli_query($con, $query);

// $num = mysqli_num_rows($result);

// if($num == 1){
//     echo 'Dublicate Data';
// }
// else{
//     $q = "INSERT INTO registration (username,email, password, confirmPassword)  value ('$user', '$e_mail ' , '$pass', '$cPassword')";
    
    
//     mysqli_query($con, $q);
// }





// if(isset($_POST['submit'])){

//    $username = mysqli_real_escape_string($conn, $_POST['username']);
//    $email = mysqli_real_escape_string($conn, $_POST['email']);
//    $password = md5($_POST['password']);
//    $confirmPassword = md5($_POST['confirmPassword']);
   

//    $select = " SELECT * FROM registration WHERE email = '$email' && password = '$password' ";

//    $result = mysqli_query($conn, $select);

//    if(mysqli_num_rows($result) > 0){

//       $error[] = 'user already exist!';

//    }else{

//       if($password != $confirmPassword){
//          $error[] = 'password not matched!';
         
//       }else{
//          $insert = "INSERT INTO registration(username, email, password, confirmPassword) VALUES('$name','$email','$password', '$confirmPassword')";
//          mysqli_query($conn, $insert);
         
//       }
//    }

// };


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





            <!-- <p class="marg">Birthday</p>
            <li style="margin-top: 0px;" class="birthday">
                <select>
                    <option>Day</option>
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="1">5</option>
                    <option value="1">6</option>
                    <option value="1">7</option>
                    <option value="1">8</option>
                    <option value="1">9</option>
                    <option value="1">10</option>
                    <option value="1">11</option>
                    <option value="1">12</option>
                    <option value="1">13</option>
                    <option value="1">14</option>
                    <option value="1">15</option>
                    <option value="1">16</option>
                    <option value="1">17</option>
                    <option value="1">18</option>
                    <option value="1">19</option>
                    <option value="1">20</option>
                    <option value="1">21</option>
                    <option value="1">22</option>
                    <option value="1">23</option>
                    <option value="1">24</option>
                    <option value="1">25</option>
                    <option value="1">26</option>
                    <option value="1">27</option>
                    <option value="1">28</option>
                    <option value="1">29</option>
                    <option value="1">30</option>

                </select>

                <select>
                    <option>Month</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>

                </select>


                <select>
                    <option>Year</option>
                    <option value="1940">1940</option>
                    <option value="1941">1941</option>
                    <option value="1942">1942</option>
                    <option value="1943">1943</option>
                    <option value="1944">1944</option>
                    <option value="1945">1945</option>
                    <option value="1946">1946</option>
                    <option value="1947">1947</option>
                    <option value="1948">1948</option>
                    <option value="1949">1949</option>
                    <option value="1950">1950</option>
                    <option value="1951">1951</option>
                    <option value="1952">1952</option>
                    <option value="1953">1953</option>
                    <option value="1954">1954</option>
                    <option value="1955">1955</option>
                    <option value="1956">1956</option>
                    <option value="1957">1957</option>
                    <option value="1958">1958</option>
                    <option value="1959">1959</option>
                    <option value="1960">1960</option>
                    <option value="1961">1961</option>
                    <option value="1962">1962</option>
                    <option value="1963">1963</option>
                    <option value="1964">1964</option>
                    <option value="1965">1965</option>
                    <option value="1966">1966</option>
                    <option value="1967">1967</option>
                    <option value="1968">1968</option>
                    <option value="1969">1969</option>
                    <option value="1970">1970</option>
                    <option value="1971">1971</option>
                    <option value="1972">1972</option>
                    <option value="1973">1973</option>
                    <option value="1974">1974</option>
                    <option value="1975">1975</option>
                    <option value="1976">1976</option>
                    <option value="1977">1977</option>
                    <option value="1978">1978</option>
                    <option value="1979">1979</option>
                    <option value="1980">1980</option>
                    <option value="1981">1981</option>
                    <option value="1982">1982</option>
                    <option value="1983">1983</option>
                    <option value="1984">1984</option>
                    <option value="1985">1985</option>
                    <option value="1986">1986</option>
                    <option value="1987">1987</option>
                    <option value="1988">1988</option>
                    <option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>

                </select>
                <a href=""></a>
            </li> -->

            <!-- <li><input type="radio" id="female" value="Female" name="gender"> <label for="female">Female</label>
                <input type="radio" id="female" value="Male" name="gender"> <label for="male">Male</label>
                <input type="radio" id="female" value="other" name="gender"> <label for="other">Other</label></li>  -->




                
            
            
            <input style="background-color: #e65100; font-weight: bold;
    border: 1px solid #e65100;" type="submit" name="submit" value="Register Now" class="btn btn-success mt-3" oninvalid="alert('You must fill out the form!');">
            <p>already have an account? <a style="color: #ff6f00; text-decoration: none; " href="login.php">login now</a></p>
            
        </form>
        </div>

    </div>





    <!-- <div id="footer_wrapper">

        <div id="footer1">
            English (UK) <a href="">हिन्दी</a><a href="">ਪੰਜਾਬੀ</a><a href=""> اردو</a><a href="">தமிழ்</a><a
                href="">বাংলা</a><a href="">मराठी</a><a href="">తెలుగు</a><a href="">ગુજરાતી</a><a href="">ಕನ್ನಡ</a><a
                href="">മലയാളം</a>
        </div>
        <div id="footer2">

            <a href="#">Sign Up</a><a href="#">Log In</a><a href="#">Messenger</a><a href="#">DotNetTec</a><a
                href="#">Mobile</a><a href="#">Find Friends</a>
            <a href="#">Badges</a><a href="#">People</a><a href="#">Pages</a><a href="#">Places</a><a
                href="#">Games</a><a href="#">Locations</a>
            <a href="">Celebrities</a><a href="">Groups</a><a href="">Moments</a><a href="">About</a>
            <a href="">Create Advert</a><a href="">Create Page</a><a href="">Developers</a>
            <a href="">Careers</a><a href="">Privacy</a><a href="">Cookies</a><a href="">Ads</a><a href="">Terms</a><a
                href="">Help</a>

        </div> -->






    </div>






    
</body>

</html>