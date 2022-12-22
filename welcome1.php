<?php

// @include 'connect.php';

session_start();



?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Welcome1</title>

    <style>
      
      img{
        display: block;
    width: 50%;
    margin: -10px auto;
      }
      h4{
        color: #e39300;
        margin-bottom: 0rem;
      }
      #navbarNavDropdown{
        justify-content: end;
      }
      .list{
        list-style: none;
      }
      .pad{
        padding: 0px 20px;
        
      }
      
      
      .colo{
        color: rgba(255,255,255,.5);
      }
      a{
        font-size: larger;
        
      }
      a:hover{
        color: black;
      }
      .imgs{
        width: 25px;
    display: inline-block;
      }
      
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
    <div>

      <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEIAAABCCAYAAADjVADoAAAABmJLR0QA/wD/AP+gvaeTAAACmUlEQVR4nO3aP2gTYRjH8e977ZCTpCHSIjpoF13908nFTXFxULCLugui0KH+w4YjLVQLoeDkLOpQwVkrOHfx36i4WFEHCyFNbArqPQ59FUl7zb3xTaLl+Yy5u+ee+93dm+O9A6WUUkoppZRSSinVE6adjeoTnBU4DWxrWhQbw+vGKpNDM9T+vr31vlwmF2aYEGE/EDQtXjHwMDvJPde6/a4bLE9wWAx3SQhR4FgmJAQuutZOI5NhWuBC0ikUOFGNeJePWHCp25xoSwYO0upKEkZc6zo41GK5CX60XGcd5yBSbtPWLZdSmtrOx9VOEFvSpmNEvcgYcEkgD8zlSpzvTlt+1IrcAUYNVIHb2RKzSesmXhHVG+wVKAsMAwVZ/w/xz7M9FwSGBcrLEfuS1k0Moq+fPXT2Xu82E6yd1A3pGGFpEJYGYf3+16gXOSowjfAhN8lJH8VljLCaZ6ePWvkqn80sDR+1akUeAbsNXMuWeAo2CAFThwfAoBhiHzsD+JrjSF/MY0+1jgNPfNQysEtgROC+wA4DEgBUrjAADPrYyX9myB67jhG/aBCWBmFpEJYGYQUAhZAasNTjXnphqXCLZbDPESYirkeckZibRvjoay8S8I2Yirdangh8Al6agKsGBP54ssxGzAPzvnYGkIt4Bmz3WdOHXIlTzb/pGGFpEJYGYSUGEcMidiDZIiT+zvukhYlBDES8NTDOWiAVAyud6K6TbM8VYNHA+MAUb5LW3XQWO1uiDJQ999c1dtY91cy7jhFWO0Gkmbjp5NiSprbz5JJzEHEfL1o2Y3juWje11rXF9ujE+W14PmKhXuScCKNs9FlAwKtGgynXummtNrgehqxIzAE2+izAMOf6JlwppZRSSimllFJK9dBPt2GhAuWOHs8AAAAASUVORK5CYII=">
      <h4>H-Fitness</h4>
    </div>
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ">
      <li class="nav-item pad active">
        <a class="nav-link " style="color: orange;" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item pad">
        <a class="nav-link "  href="#">Features</a>
      </li>
      <li class="nav-item pad">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      
    </ul>
  </div>
  <div class="collapse navbar-collapse list" id="navbarNavDropdown">

    <li class="nav-item clearfix  dropdown">
      <a class="nav-link colo dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <img class="inline-block imgs" src="https://img.icons8.com/metro/22/000000/guest-male.png" class="object-center"> <?php echo "Welcome " . $_SESSION['username']; ?>
        
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="profile.php">My Profile</a>
        <a class="dropdown-item" href="#">Setting</a>
        <a class="dropdown-item" href="logout.php">Logout</a>
      </div>
    </li>
  </div>
</nav>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>