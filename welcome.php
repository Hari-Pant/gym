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
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
  <script src="https://cdn.tailwindcss.com"></script>


  <!-- Bootstrap CSS -->


  <title>Welcome</title>
</head>

<body>

  <header class="text-gray-600 body-font bg-zinc-900">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium 	 items-center md:justify-start justify-center ">
        <img src="jn.png">
        <span class="ml-3 text-orange-400 text-2xl">H-Fitness</span>
      </a>
      <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
        <a href="index.php" class="mr-5  text-orange-500">Home</a>
        <a href="services.php" class="mr-5 text-white hover:text-orange-500">Services</a>
        <a href="about us.php" class="mr-5 text-white hover:text-orange-500">About Us</a>
        <a href="contact us.php" class="mr-5 text-white hover:text-orange-500">Contact</a>



      </nav>

      <div class="navbar-collapse  ">
        <ul class="navbar-nav ml-auto ">
          <li class="nav-item ">
            <a href="#" class="mr-2 "> <img class="inline-block" src="https://img.icons8.com/metro/22/000000/guest-male.png" class="object-center"> <?php echo "Welcome " . $_SESSION['username']; ?></a>
            <a href="logout.php" class="text-white">Logout</a>
          </li>

        </ul>

      </div>



    </div>
  </header>


  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid ">
  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEIAAABCCAYAAADjVADoAAAABmJLR0QA/wD/AP+gvaeTAAACmUlEQVR4nO3aP2gTYRjH8e977ZCTpCHSIjpoF13908nFTXFxULCLugui0KH+w4YjLVQLoeDkLOpQwVkrOHfx36i4WFEHCyFNbArqPQ59FUl7zb3xTaLl+Yy5u+ee+93dm+O9A6WUUkoppZRSSinVE6adjeoTnBU4DWxrWhQbw+vGKpNDM9T+vr31vlwmF2aYEGE/EDQtXjHwMDvJPde6/a4bLE9wWAx3SQhR4FgmJAQuutZOI5NhWuBC0ikUOFGNeJePWHCp25xoSwYO0upKEkZc6zo41GK5CX60XGcd5yBSbtPWLZdSmtrOx9VOEFvSpmNEvcgYcEkgD8zlSpzvTlt+1IrcAUYNVIHb2RKzSesmXhHVG+wVKAsMAwVZ/w/xz7M9FwSGBcrLEfuS1k0Moq+fPXT2Xu82E6yd1A3pGGFpEJYGYf3+16gXOSowjfAhN8lJH8VljLCaZ6ePWvkqn80sDR+1akUeAbsNXMuWeAo2CAFThwfAoBhiHzsD+JrjSF/MY0+1jgNPfNQysEtgROC+wA4DEgBUrjAADPrYyX9myB67jhG/aBCWBmFpEJYGYQUAhZAasNTjXnphqXCLZbDPESYirkeckZibRvjoay8S8I2Yirdangh8Al6agKsGBP54ssxGzAPzvnYGkIt4Bmz3WdOHXIlTzb/pGGFpEJYGYSUGEcMidiDZIiT+zvukhYlBDES8NTDOWiAVAyud6K6TbM8VYNHA+MAUb5LW3XQWO1uiDJQ999c1dtY91cy7jhFWO0Gkmbjp5NiSprbz5JJzEHEfL1o2Y3juWje11rXF9ujE+W14PmKhXuScCKNs9FlAwKtGgynXummtNrgehqxIzAE2+izAMOf6JlwppZRSSimllFJK9dBPt2GhAuWOHs8AAAAASUVORK5CYII=">
        <span class="ml-3 text-orange-400 text-2xl">H-Fitness</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>



    
    <div class="collapse  navbar-collapse ml-24" id="navbarNavDropdown">
      <ul class="navbar-nav ml-24">
        <li class="nav-item ml-24">
          <a class="nav-link active ml-24" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ml-10" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ml-10" href="about us.php">About Us</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link ml-10" href="contact us.php">Contact</a>
        </li> -->






  <!-- <li class="nav-item dropdown "  >
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Dropdown link
          </a>

          
          <ul class="dropdown-menu " tabindex="0" aria-expanded="false">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul> -->

  <!-- </li>
      </ul>
    </div>

    <div class="navbar-collapse collapse ">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
          <a class="nav-link" href="#"> <?php echo "Welcome " . $_SESSION['username']; ?>  </a>
          
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="logout.php">Logout </a>
          
        </li>

          </ul>

        </div>
  </div>
</nav> -->




  <section class="text-gray-600 h-screen body-font bg-gray-200">
    <div class="">
      <div class="">
        <div class="flex flex-wrap  w-full bg-gray-200 py-32 px-10 relative ">
          <img alt="gallery" class="w-full object-cover h-screen object-center block opacity-100 absolute inset-0" src="bg.jpg">
          <div class="text-center relative z-10 w-full">
            <h1 class="text-5xl text-gray-300 text-white font-medium title-font mb-2">EXERCISE UNTIL THE BODY OBEYS.
            </h1>
            <p class="leading-relaxed text-gray-300 text-2xl font-medium">WHERE HEALTH, BEAUTY AND FITNESS MEET. </p>
            <!-- <button
              class="mt-3 p-3 px-5 text-white inline-flex mt-10 items-center border-2 border-orange-500">APPOINTMENT</button> -->
            <!-- <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More -->



            <a href="appointment.php" class="mt-3 p-3 px-5 text-white inline-flex mt-10 items-center border-2 border-orange-500">APPOINTMENT</a>
          </div>
        </div>

      </div>
    </div>
  </section>



  <section class=" body-font bg-black">
    <div class="container  px-5 py-24 ">
      <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
        <p class="lg:w-1/2 w-full leading-relaxed text-orange-500 text-xxl font-medium">WHY CHOOSE US?</p>
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white">PUSH YOUR LIMITS FORWARD</h1>

      </div>
      <div class="flex text-white flex-wrap -m-4">
        <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class=" border-gray-200 p-6 rounded-lg">
            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
              </svg>
            </div>
            <h2 class="text-lg  font-medium title-font mb-2">Modern Equipment</h2>
            <p class="leading-relaxed text-gray-400 text-base"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Eaque, explicabo magnam. Accusantium error reiciendis non! Molestias aperiam voluptatum quaerat, quae esse
              reiciendis et illum iusto provident perferendis architecto facere laudantium? </p>
          </div>
        </div>
        <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class=" border-gray-200 p-6 rounded-lg">
            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 ">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6 " viewBox="0 0 24 24">
                <circle cx="6 " cy="6" r="3"></circle>
                <circle cx="6" cy="18" r="3"></circle>
                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
              </svg>
            </div>
            <h2 class="text-lg  font-medium title-font mb-2">Healthy Nutrition Plan</h2>
            <p class="leading-relaxed text-gray-400 text-base"> Quis ipsum suspendisse ultrices gravida. Risus commodo
              viverra maecenas accumsan lacus vel facilisis. </p>
          </div>
        </div>
        <div class="xl:w-1/3 md:w-1/2 p-4">
          <div class=" border-gray-200 p-6 rounded-lg">
            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
            </div>
            <h2 class="text-lg  font-medium title-font mb-2">Professional training Plan</h2>
            <p class="leading-relaxed text-gray-400 text-base">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Reprehenderit, eius voluptas, mollitia rerum beatae perspiciatis illum ratione quaerat nobis nulla nisi
              cupiditate corrupti sit ullam consequuntur ipsum placeat maxime rem.</p>
          </div>
        </div>
      </div>

    </div>

  </section>




  <section class="text-black-500 body-font bg-zinc-900">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
        <p class="lg:w-1/2 w-full leading-relaxed text-orange-500 text-xxl font-medium">OUR CLASSES</p>
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white">WHAT WE CAN OFFER</h1>

      </div>
      <div class="flex flex-wrap -m-4">
        <div class="xl:w-1/4 md:w-1/2 p-4">
          <div class="bg-gray-100  rounded-lg">
            <img class="h-70 rounded w-full object-cover object-center " src="https://source.unsplash.com/720x400/?weightlifting" alt="content">
            <div class=" border-t h-20  border-ra bg-black ">
              <h3 class="tracking-widest ml-5 mt-4 mb-1 text-orange-500  text-xs font-medium title-font">STRENGTH</h3>
              <h2 class="text-lg text-white ml-5 -mb-10 font-medium title-font mb-4">WEIGHTLIFTING</h2>
            </div>
          </div>
        </div>
        <div class="xl:w-1/4 md:w-1/2 p-4">
          <div class="bg-gray-100  rounded-lg">
            <img class="h-70 rounded w-full object-cover object-center " src="https://source.unsplash.com/720x400/?cardio" alt="content">
            <div class=" border-t h-20  border-ra bg-black ">
              <h3 class="tracking-widest ml-5 mt-4 mb-1 text-orange-500  text-xs font-medium title-font">CARDIO</h3>
              <h2 class="text-lg text-white ml-5 -mb-10 font-medium title-font mb-4">INDOOR CYCLING</h2>
            </div>
          </div>
        </div>
        <div class="xl:w-1/4 md:w-1/2 p-4">
          <div class="bg-gray-100  rounded-lg">
            <img class="h-70 rounded w-full object-cover object-center " src="https://source.unsplash.com/720x400/?gym" alt="content">
            <div class=" border-t h-20  border-ra bg-black ">
              <h3 class="tracking-widest ml-5 mt-4 mb-1 text-orange-500  text-xs font-medium title-font">STRENGTH</h3>
              <h2 class="text-lg text-white ml-5 -mb-10 font-medium title-font mb-4">KETTLEBELL POWER</h2>
            </div>
          </div>
        </div>
        <div class="xl:w-1/4 md:w-1/2 p-4">
          <div class="bg-gray-100 rounded-lg">
            <img class="h-70 rounded w-full object-cover object-center " src="https://source.unsplash.com/720x400/?boxing" alt="content">
            <div class=" border-t h-20  border-ra bg-black ">
              <h3 class="tracking-widest ml-5 mt-4 mb-1 text-orange-500  text-xs font-medium title-font">TRAINING</h3>
              <h2 class="text-lg text-white ml-5 -mb-10 font-medium title-font mb-4">BOXING</h2>
            </div>


          </div>
        </div>
      </div>
    </div>
  </section>





  <!-- <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">OUR CLASSES</p>
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">WHAT WE CAN OFFER</h1>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://source.unsplash.com/600x360/?fitness">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1"></h2>
              <p class="leading-relaxed">STRENGTH</p>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">WEIGHTLIFTING</h1>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://source.unsplash.com/601x361/?fitness">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://source.unsplash.com/603x363/?fitness">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The 400 Blows</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://source.unsplash.com/602x362/?fitness">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Neptune</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://source.unsplash.com/605x365/?fitness">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Holden Caulfield</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
        <div class="lg:w-1/3 sm:w-1/2 p-4">
          <div class="flex relative">
            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://source.unsplash.com/606x366/?fitness">
            <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
              <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Alper Kamu</h1>
              <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->





  <!-- <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-wrap">
    <div class="flex w-full mb-20 flex-wrap">
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 lg:w-1/3 lg:mb-0 mb-4">Master Cleanse Reliac Heirloom</h1>
      <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</p>
    </div>
    <div class="flex flex-wrap md:-m-2 -m-1">
      <div class="flex flex-wrap w-1/2">
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://source.unsplash.com/500x300/?fitness">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://source.unsplash.com/501x301/?fitness">
        </div>
        <div class="md:p-2 p-1 w-full">
          <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://dummyimage.com/600x360">
        </div>
      </div>
      <div class="flex flex-wrap w-1/2">
        
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" src="https://dummyimage.com/502x302">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/503x303">
        </div>
        <div class="md:p-2 p-1 w-full">
            <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://dummyimage.com/601x361">
          </div>
      </div>
    </div>
  </div>
</section> -->




  <section class="text-gray-600 h-full body-font bg-gray-200">
    <div class="">
      <div class="">
        <div class="flex flex-wrap  w-full bg-gray-100 py-32 px-10 relative ">
          <img alt="gallery" class="w-full object-cover h-full object-center block opacity-100 absolute inset-0" src="banner-bg.jpg.webp">
          <div class="text-center relative z-10 w-full">
            <h1 class="text-5xl text-gray-400 text-white font-medium title-font mb-2">REGISTRATION NOW TO GET MORE DEALS
            </h1>
            <p class="leading-relaxed text-gray-300 text-2xl font-medium">WHERE HEALTH, BEAUTY AND FITNESS MEET. </p>
            <button class="mt-3 p-3 px-5 text-white inline-flex mt-10 items-center border-2 border-orange-500">APPOINTMENT</button>
            <!-- <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More -->

            </a>
          </div>
        </div>

      </div>
    </div>
  </section>






  <section class="text-gray-600 body-font text-white bg-zinc-900 overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <p class="lg:w-2/3 mx-auto leading-relaxed text-xl text-orange-500">OUR PLAN</p>
        <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-white">CHOOSE YOUR PRICING PLAN</h1>
        <div class="flex mx-auto border-2 border-indigo-500 rounded overflow-hidden mt-6">
          <button class="py-1 px-4 bg-indigo-500 text-white focus:outline-none"><a href="monthly.html">Monthly</a></button>
          <button class="py-1 px-4 focus:outline-none"><a href="annually.html">Annually</a> </button>
        </div>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
          <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
            <h2 class="text-sm tracking-widest title-font text-center mb-1 font-medium">START</h2>
            <h1 class="text-5xl text-orange-500 pb-4 mb-4 border-b text-center text-white border-gray-200 leading-none">
              Free</h1>
            <p class="flex items-center text-white text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Free riding
            </p>
            <p class="flex items-center text-white text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Unlimited equipments
            </p>
            <p class="flex items-center text-white mb-6">
              <span class="w-4 h-4 mr-2 inline-flex  items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Personal trainer
            </p>
            <button class="flex items-center mt-auto  text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">ENROLL NOW
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </button>
            <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</p>
          </div>
        </div>
        <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
          <div class="h-full p-6  rounded-lg border-2 border-indigo-500 flex flex-col relative overflow-hidden">
            <span class="bg-indigo-500 text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">POPULAR</span>
            <h2 class="text-sm tracking-widest  title-font mb-1 font-medium">PRO</h2>
            <h1 class="text-5xl text-orange-500 text-white leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
              <span>$38</span>
              <span class="text-lg ml-1 font-normal text-gray-500">/mo</span>
            </h1>
            <p class="flex items-center text-white  text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2  inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Free riding
            </p>
            <p class="flex items-center text-white text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Unlimited equipments
            </p>
            <p class="flex items-center text-white text-gray-600 mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Personal trainer
            </p>
            <p class="flex items-center text-white text-gray-600 mb-6">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Weight losing classes
            </p>
            <button class="flex items-center mt-auto text-white bg-indigo-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-indigo-600 rounded">ENROLL NOW
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </button>
            <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</p>
          </div>
        </div>
        <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
          <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
            <h2 class="text-sm tracking-widest title-font mb-1 font-medium">BUSINESS</h2>
            <h1 class="text-5xl text-orange-500 text-white leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
              <span>$56</span>
              <span class="text-lg ml-1 font-normal text-gray-500">/mo</span>
            </h1>
            <p class="flex items-center text-white  mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Free riding
            </p>
            <p class="flex items-center  mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Unlimited equipments
            </p>
            <p class="flex items-center  mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Personal trainer
            </p>
            <p class="flex items-center  mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Weight losing classes
            </p>
            <p class="flex items-center  mb-6">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Month to mouth
            </p>
            <button class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">ENROLL NOW
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </button>
            <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</p>
          </div>
        </div>
        <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
          <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
            <h2 class="text-sm tracking-widest title-font mb-1 font-medium">SPECIAL</h2>
            <h1 class="text-5xl text-orange-500 text-white leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
              <span>$72</span>
              <span class="text-lg ml-1 font-normal text-gray-500">/mo</span>
            </h1>
            <p class="flex items-center  mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Free riding
            </p>
            <p class="flex items-center  mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Unlimited equipments
            </p>
            <p class="flex items-center  mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Personal trainer
            </p>
            <p class="flex items-center  mb-2">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Weight losing classes
            </p>
            <p class="flex items-center  mb-6">
              <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Month to mouth
            </p>
            <button class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">ENROLL NOW
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </button>
            <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</p>
          </div>
        </div>
      </div>
    </div>
  </section>





  <section class="text-gray-600 body-font bg-zinc-900">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">

      <div class="flex flex-wrap md:-m-2 -m-1">
        <div class="flex flex-wrap w-1/2">
          <div class="md:p-2 p-1 w-1/2">
            <img alt="gallery" class="w-full  object-cover h-full object-center block" src="https://source.unsplash.com/500x300/?boxing">
          </div>
          <div class="md:p-2 p-1 w-1/2">
            <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://source.unsplash.com/501x301/?fitness">
          </div>
          <div class="md:p-2 p-1 w-full">
            <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://source.unsplash.com/600x360/?fit">
          </div>
        </div>
        <div class="flex flex-wrap w-1/2">
          <div class="md:p-2 p-1 w-full">
            <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://source.unsplash.com/601x361/?gym">
          </div>
          <div class="md:p-2 p-1 w-1/2">
            <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://source.unsplash.com/502x302/?strength">
          </div>
          <div class="md:p-2 p-1 w-1/2">
            <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://source.unsplash.com/503x303/?cardio">
          </div>
        </div>
      </div>
    </div>
  </section>




  <!-- <section class=" bg-zinc-900  body-font">
        <div class="px-5 mx-28  mx-auto flex items-center md:flex-row flex-col">
          <div class="flex flex-col md:pr-10 md:mb-0 mb-6 pr-0 w-full md:w-auto md:text-left text-center">
            <h2 class="text-xs text-orange-500 tracking-widest font-medium title-font mb-1">OUR TEAM </h2>
            <h1 class="md:text-3xl text-2xl text-white font-medium title-font ">TRAIN WITH EXPERTS</h1>
          </div>
    
          <div class="  px-5 py-10 ml-auto">
            <div class="lg:w-2/3 flex flex-col sm:flex-row sm:items-center items-start mx-auto">
              <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-gray-900"></h1>
              <button
                class="mt-3 p-3 px-5 text-white inline-flex mr-4 items-center border-2 border-orange-500">APPOINTMENT</button>
            </div>
    
          </div>



          
    
    
      </section> -->


  <section class=" bg-zinc-900  body-font">
    <div class="px-5 mx-28  mr-auto flex items-center md:flex-row flex-col">
      <div class="flex flex-col md:pr-10 md:mb-0 mb-6 pr-0 w-full md:w-auto md:text-left text-center">
        <h2 class="text-xs text-orange-500 tracking-widest font-medium title-font mb-1">OUR TEAM </h2>
        <h1 class="md:text-3xl text-2xl text-white font-medium title-font ">TRAIN WITH EXPERTS</h1>
      </div>

      <div class="  pr-20 py-10 ml-auto">
        <div class="lg:w-2/3 flex flex-col pr-20 sm:flex-row sm:items-center items-start mx-auto">
          <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-gray-900"></h1>
          <button class="mt-3 p-3 px-5 text-white inline-flex mr-4 items-center border-2 border-orange-500">APPOINTMENT</button>
        </div>

      </div>






  </section>




  <div class="container pb-12 bg-zinc-900 px-5 ">
    <div class="flex mx-24 flex-wrap -m-4">
      <div class="p-4 md:w-1/3">
        <div class="h-full  border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://source.unsplash.com/720x400/?boxing" alt="blog">
          <div class="p-6">

            <h1 class="title-font text-lg font-medium text-white mb-3">Athart Rachel</h1>
            <p class="leading-relaxed text-gray-400 mb-3">Gym Trainer</p>

          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="h-full  border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://source.unsplash.com/721x401/?gym" alt="blog">
          <div class="p-6">

            <h1 class="title-font text-lg font-medium text-white  mb-3">Athart Rachel</h1>
            <p class="leading-relaxed text-gray-400 mb-3">Gym Trainer</p>

          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="h-full  border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://source.unsplash.com/722x402/?fitness" alt="blog">
          <div class="p-6">

            <h1 class="title-font text-lg font-medium text-white mb-3">Athart Rachel</h1>
            <p class="leading-relaxed text-gray-400 mb-3">Gym Trainer</p>

          </div>
        </div>
      </div>
    </div>
  </div>






  <hr>


  <section class="text-gray-600 bg-black body-font">
    <div class="container px-5  mx-auto">

      <div class="flex flex-wrap -m-4">
        <div class="p-4 md:w-1/3">
          <div class="flex rounded-lg text-white h-full p-8 flex-col">
            <div class="flex items-center mb-3">
              <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                </svg>
              </div>
              <h2 class=" text-lg title-font font-medium">333 Middle Winchendon Rd, Rindge,
                NH 03461</h2>
            </div>

          </div>
        </div>
        <div class="p-4 md:w-1/3">
          <div class="flex rounded-lg text-white h-full p-8 flex-col">
            <div class="flex items-center mb-3">
              <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
              </div>
              <h2 class=" text-lg title-font font-medium">125-711-811 125-668-886</h2>
            </div>

          </div>
        </div>
        <div class="p-4 md:w-1/3">
          <div class="flex rounded-lg text-white h-full  p-8 flex-col">
            <div class="flex items-center mb-3">
              <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <circle cx="6" cy="6" r="3"></circle>
                  <circle cx="6" cy="18" r="3"></circle>
                  <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                </svg>
              </div>
              <h2 class=" text-lg title-font font-medium">Support.gymcenter@gmail.com</h2>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>




  <!-- <footer class="text-white  bg-black body-font">
    <div
      class="container px-10  mx-auto py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
      <div class="w-64  flex-shrink-0 md:mx-0  text-center md:text-left">
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
            viewBox="0 0 24 24">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
          </svg>
          <span class="ml-3 text-white text-xl">H-Fitness</span>
        </a>
        <p class="mt-2 text-sm text-gray-400">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo alias non
          culpa. At esse laborum pariatur, nobis ipsum iste doloremque eum, obcaecati atque excepturi qui saepe eveniet?
          Tempore, ducimus esse!</p>
      </div>
      <div class="flex-grow  flex md:flex-wrap-reverse md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h1 class="title-font font-medium text-2xl tracking-widest  mb-3">Useful links</h1>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">About</a>
            </li>
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">Blog</a>
            </li>
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">Classes</a>
            </li>
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">Contact</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h1 class="title-font font-medium text-2xl tracking-widest  mb-3">Support</h1>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">Login</a>
            </li>
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">My account</a>
            </li>
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">Subscribe</a>
            </li>
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">Contact</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h1 class="title-font font-medium text-2xl tracking-widest  mb-3">Tips & Guides</h1>
          <nav class="list-none mb-10">


            <h3 class="mb-3">
              <a class="text-gray-400 cursor-pointer">Physical fitness may help prevent depression, anxiety</a>
            </h3>
            <ul class="list-none mb-4 border-b border-gray-900 pb-2 ">
              <li class=" text-gray-600 text-xs">
                3 min read | 20 Comment

              </li>

            </ul>

            <ul class="list-none mb-4 pb-2 ">
              <h3 class="mb-3">
                <a class="text-gray-400 ">Fitness: The best exercise to lose belly fat and tone up...</a>
              </h3>
              <li class=" text-gray-600 text-xs">
                3 min read | 20 Comment

              </li>

            </ul>



          </nav>
        </div>

        
        




      </div>
    </div>
    <hr>
    <div class="bg-black">
      <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
        <p class="text-gray-400 text-sm text-center sm:text-left">© 2022 All rights reserved —
          <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-400 ml-1"
            target="_blank">This website is made with <p>&#128151</p> by Harry Pant</a>
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
          <a class="text-gray-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
              viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
              viewBox="0 0 24 24">
              <path
                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
              </path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
              <path stroke="none"
                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
      </div>
    </div>
  </footer> -->



  <!-- <footer class="text-white  bg-black body-font">
  <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
    <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
      <a class="navbar-brand text-orange-500 mr-20" href="#"> <span class="text-3xl  ">H</span><span class="font-bold">-</span>Fitness</a>
      </a>
      <p class="mt-2 text-sm text-gray-400">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo alias non
          culpa. At esse laborum pariatur, nobis ipsum iste doloremque eum, obcaecati atque excepturi qui saepe eveniet?
          Tempore, ducimus esse!</p>
    </div>
    <div class="flex-grow  flex md:flex-wrap-reverse md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h1 class="title-font font-medium text-2xl tracking-widest  mb-3">Useful links</h1>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">About</a>
            </li>
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">Blog</a>
            </li>
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">Classes</a>
            </li>
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">Contact</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h1 class="title-font font-medium text-2xl tracking-widest  mb-3">Support</h1>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">Login</a>
            </li>
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">My account</a>
            </li>
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">Subscribe</a>
            </li>
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">Contact</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h1 class="title-font font-medium text-2xl tracking-widest  mb-3">Useful links</h1>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">About</a>
            </li>
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">Blog</a>
            </li>
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">Classes</a>
            </li>
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">Contact</a>
            </li>
          </nav>
        </div>

        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h1 class="title-font font-medium text-2xl tracking-widest  mb-3">Tips & Guides</h1>
          <nav class="list-none mb-10">


            <h3 class="mb-3">
              <a class="text-gray-400 cursor-pointer">Physical fitness may help prevent depression, anxiety</a>
            </h3>
            <ul class="list-none mb-4 border-b border-gray-900 pb-2 ">
              <li class=" text-gray-600 text-xs">
                3 min read | 20 Comment

              </li>

            </ul>

            <ul class="list-none mb-4 pb-2 ">
              <h3 class="mb-3">
                <a class="text-gray-400 ">Fitness: The best exercise to lose belly fat and tone up...</a>
              </h3>
              <li class=" text-gray-600 text-xs">
                3 min read | 20 Comment

              </li>

            </ul>



          </nav>
        </div>





    </div>
  </div>
  <div class="bg-gray-100">
    <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
      <p class="text-gray-500 text-sm text-center sm:text-left">© 2020 Tailblocks —
        <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@knyttneve</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
        <a class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </div>
</footer> -->




  <footer class="text-white  bg-black body-font">
    <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
      <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
        <a class="flex title-font font-medium  items-center md:justify-start justify-center ">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEIAAABCCAYAAADjVADoAAAABmJLR0QA/wD/AP+gvaeTAAACmUlEQVR4nO3aP2gTYRjH8e977ZCTpCHSIjpoF13908nFTXFxULCLugui0KH+w4YjLVQLoeDkLOpQwVkrOHfx36i4WFEHCyFNbArqPQ59FUl7zb3xTaLl+Yy5u+ee+93dm+O9A6WUUkoppZRSSinVE6adjeoTnBU4DWxrWhQbw+vGKpNDM9T+vr31vlwmF2aYEGE/EDQtXjHwMDvJPde6/a4bLE9wWAx3SQhR4FgmJAQuutZOI5NhWuBC0ikUOFGNeJePWHCp25xoSwYO0upKEkZc6zo41GK5CX60XGcd5yBSbtPWLZdSmtrOx9VOEFvSpmNEvcgYcEkgD8zlSpzvTlt+1IrcAUYNVIHb2RKzSesmXhHVG+wVKAsMAwVZ/w/xz7M9FwSGBcrLEfuS1k0Moq+fPXT2Xu82E6yd1A3pGGFpEJYGYf3+16gXOSowjfAhN8lJH8VljLCaZ6ePWvkqn80sDR+1akUeAbsNXMuWeAo2CAFThwfAoBhiHzsD+JrjSF/MY0+1jgNPfNQysEtgROC+wA4DEgBUrjAADPrYyX9myB67jhG/aBCWBmFpEJYGYQUAhZAasNTjXnphqXCLZbDPESYirkeckZibRvjoay8S8I2Yirdangh8Al6agKsGBP54ssxGzAPzvnYGkIt4Bmz3WdOHXIlTzb/pGGFpEJYGYSUGEcMidiDZIiT+zvukhYlBDES8NTDOWiAVAyud6K6TbM8VYNHA+MAUb5LW3XQWO1uiDJQ999c1dtY91cy7jhFWO0Gkmbjp5NiSprbz5JJzEHEfL1o2Y3juWje11rXF9ujE+W14PmKhXuScCKNs9FlAwKtGgynXummtNrgehqxIzAE2+izAMOf6JlwppZRSSimllFJK9dBPt2GhAuWOHs8AAAAASUVORK5CYII=">
          <span class="ml-3 text-orange-400 text-2xl">H-Fitness</span>
        </a>
        <p class="mt-2 text-sm text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo alias non
          culpa. At esse laborum pariatur, nobis ipsum iste doloremque eum, obcaecati atque excepturi qui saepe eveniet?
          Tempore, ducimus esse!</p>
      </div>
      <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium  tracking-widest text-sm mb-3">Useful links</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">About</a>
            </li>
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">Blog</a>
            </li>
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">Classes</a>
            </li>
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">Contact</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium  tracking-widest text-sm mb-3">Support</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">Login</a>
            </li>
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">My account</a>
            </li>
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">Subscribe</a>
            </li>
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">Contact</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium  tracking-widest text-sm mb-3">Useful links</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">About</a>
            </li>
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">Blog</a>
            </li>
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">Classes</a>
            </li>
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">Contact</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium  tracking-widest text-sm mb-3">Support</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">Login</a>
            </li>
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">My account</a>
            </li>
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">Subscribe</a>
            </li>
            <li>
              <a class="text-gray-400 cursor-pointer hover:text-gray-500">Contact</a>
            </li>
          </nav>
        </div>
      </div>
    </div>

    <hr>

    <div class="bg-black">
      <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
        <p class="text-gray-500 text-sm text-center sm:text-left">© 2022 All rights reserved —
          <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-400 ml-1" target="_blank">This website is made with <p>&#128151</p> by Harry Pant</a>
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
          <a class="text-gray-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
              <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
      </div>
    </div>
  </footer>




</body>

</html>