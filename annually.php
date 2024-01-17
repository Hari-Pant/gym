<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <title>GYM Fitness</title>



</head>

<body>


  <nav class="bg-zinc-900 border-gray-200 px-2 md:px-4  py-2.5 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
        <a href="https://flowbite.com" class="flex items-center">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEIAAABCCAYAAADjVADoAAAABmJLR0QA/wD/AP+gvaeTAAACmUlEQVR4nO3aP2gTYRjH8e977ZCTpCHSIjpoF13908nFTXFxULCLugui0KH+w4YjLVQLoeDkLOpQwVkrOHfx36i4WFEHCyFNbArqPQ59FUl7zb3xTaLl+Yy5u+ee+93dm+O9A6WUUkoppZRSSinVE6adjeoTnBU4DWxrWhQbw+vGKpNDM9T+vr31vlwmF2aYEGE/EDQtXjHwMDvJPde6/a4bLE9wWAx3SQhR4FgmJAQuutZOI5NhWuBC0ikUOFGNeJePWHCp25xoSwYO0upKEkZc6zo41GK5CX60XGcd5yBSbtPWLZdSmtrOx9VOEFvSpmNEvcgYcEkgD8zlSpzvTlt+1IrcAUYNVIHb2RKzSesmXhHVG+wVKAsMAwVZ/w/xz7M9FwSGBcrLEfuS1k0Moq+fPXT2Xu82E6yd1A3pGGFpEJYGYf3+16gXOSowjfAhN8lJH8VljLCaZ6ePWvkqn80sDR+1akUeAbsNXMuWeAo2CAFThwfAoBhiHzsD+JrjSF/MY0+1jgNPfNQysEtgROC+wA4DEgBUrjAADPrYyX9myB67jhG/aBCWBmFpEJYGYQUAhZAasNTjXnphqXCLZbDPESYirkeckZibRvjoay8S8I2Yirdangh8Al6agKsGBP54ssxGzAPzvnYGkIt4Bmz3WdOHXIlTzb/pGGFpEJYGYSUGEcMidiDZIiT+zvukhYlBDES8NTDOWiAVAyud6K6TbM8VYNHA+MAUb5LW3XQWO1uiDJQ999c1dtY91cy7jhFWO0Gkmbjp5NiSprbz5JJzEHEfL1o2Y3juWje11rXF9ujE+W14PmKhXuScCKNs9FlAwKtGgynXummtNrgehqxIzAE2+izAMOf6JlwppZRSSimllFJK9dBPt2GhAuWOHs8AAAAASUVORK5CYII=">
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white text-orange-400 text-2xl">H-Fitness</span>
        </a>
        <div class="flex items-center  md:order-2">
            <a href="login.php" class="text-white  dark:text-white hover:bg-orange-500 focus:ring-4 focus:ring-gray-300 font-semibold rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Login</a>
            <a href="register.php" class="text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:ring-blue-300 font-semibold rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-2 dark:-orange-400 dark:hover:-orange-500 focus:outline-none dark:focus:ring-blue-800">Register</a>
            <button data-collapse-toggle="mega-menu" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mega-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        <div id="mega-menu" class="hidden justify-between items-center w-full text-sm md:flex md:w-auto md:order-1">
            <ul class="flex flex-col mt-4 font-semibold md:flex-row md:space-x-8 md:mt-0">
                <li>
                    <a href="index.php" class="block  py-2  pr-4 pl-3 text-orange-400 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0  md:p-0 dark:text-blue-500 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="services.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0 dark:text-blue-500 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700" >Services</a>
                </li>
                <li>
                    <a href="about us.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0 dark:text-gray-400 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">About Us</a>
                </li>
                <li>
                    <a href="contact us.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-orange-400 md:p-0 dark:text-gray-400 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
  



<section class="text-gray-600 h-screen body-font bg-gray-200">
    <div class="">
      <div class="">
        <div class="flex flex-wrap  w-full bg-gray-200 py-32 px-10 relative ">
          <img alt="gallery" class="w-full object-cover h-screen object-center block opacity-100 absolute inset-0"
            src="bg.jpg">
          <div class="text-center relative z-10 w-full">
            <h1 class="text-5xl text-gray-200 text-white font-medium title-font mb-2">EXERCISE UNTIL THE BODY OBEYS.
            </h1>
            <p class="leading-relaxed text-gray-300 text-2xl font-medium">WHERE HEALTH, BEAUTY AND FITNESS MEET. </p>
            <a
              href="appointment.php" class="mt-3 p-3 px-5 text-white inline-flex mt-10 items-center border-2 border-orange-500">APPOINTMENT</a>
            <!-- <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More -->

            </a>
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
            <div
              class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-6 h-6" viewBox="0 0 24 24">
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
            <div
              class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 ">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-6 h-6 " viewBox="0 0 24 24">
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
            <div
              class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-6 h-6" viewBox="0 0 24 24">
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
            <img class="h-70 rounded w-full object-cover object-center "
              src="https://source.unsplash.com/720x400/?weightlifting" alt="content">
            <div class=" border-t h-20  border-ra bg-black ">
              <h3 class="tracking-widest ml-5 mt-4 mb-1 text-orange-500  text-xs font-medium title-font">STRENGTH</h3>
              <h2 class="text-lg text-white ml-5 -mb-10 font-medium title-font mb-4">WEIGHTLIFTING</h2>
            </div>
          </div>
        </div>
        <div class="xl:w-1/4 md:w-1/2 p-4">
          <div class="bg-gray-100  rounded-lg">
            <img class="h-70 rounded w-full object-cover object-center "
              src="https://source.unsplash.com/720x400/?cardio" alt="content">
            <div class=" border-t h-20  border-ra bg-black ">
              <h3 class="tracking-widest ml-5 mt-4 mb-1 text-orange-500  text-xs font-medium title-font">CARDIO</h3>
              <h2 class="text-lg text-white ml-5 -mb-10 font-medium title-font mb-4">INDOOR CYCLING</h2>
            </div>
          </div>
        </div>
        <div class="xl:w-1/4 md:w-1/2 p-4">
          <div class="bg-gray-100  rounded-lg">
            <img class="h-70 rounded w-full object-cover object-center " src="https://source.unsplash.com/720x400/?gym"
              alt="content">
            <div class=" border-t h-20  border-ra bg-black ">
              <h3 class="tracking-widest ml-5 mt-4 mb-1 text-orange-500  text-xs font-medium title-font">STRENGTH</h3>
              <h2 class="text-lg text-white ml-5 -mb-10 font-medium title-font mb-4">KETTLEBELL POWER</h2>
            </div>
          </div>
        </div>
        <div class="xl:w-1/4 md:w-1/2 p-4">
          <div class="bg-gray-100 rounded-lg">
            <img class="h-70 rounded w-full object-cover object-center "
              src="https://source.unsplash.com/720x400/?boxing" alt="content">
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
          <img alt="gallery" class="w-full object-cover h-full object-center block opacity-100 absolute inset-0"
            src="banner-bg.jpg.webp">
          <div class="text-center relative z-10 w-full">
            <h1 class="text-5xl text-gray-200 text-white font-medium title-font mb-2">REGISTRATION NOW TO GET MORE DEALS
            </h1>
            <p class="leading-relaxed text-gray-300 text-2xl font-medium">WHERE HEALTH, BEAUTY AND FITNESS MEET. </p>
            <a
              href="appointment.php" class="mt-3 p-3 pointer px-5 text-white inline-flex mt-10 items-center border-2 border-orange-500">APPOINTMENT</a>
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
        <div class="flex mx-auto border-2 border-orange-500 rounded overflow-hidden mt-6">
          <button class="py-1 px-4  text-white focus:outline-none"> <a href="index.php">Monthly</a></button>
          <button class="py-1 px-4 bg-orange-500 text-white focus:outline-none    "> <a href="annually.php"></a>Annually</button>
        </div>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
          <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
            <h2 class="text-sm tracking-widest title-font text-center mb-1 font-medium">START</h2>
            <h1 class="text-5xl text-orange-500 pb-4 mb-4 border-b text-center text-white border-gray-200 leading-none">
              Free</h1>
            <p class="flex items-center text-white  mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Free riding
            </p>
            <p class="flex items-center text-white  mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Unlimited equipments
            </p>
            <p class="flex items-center text-white mb-6">
              <span
                class="w-4 h-4 mr-2 inline-flex  items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Personal trainer
            </p>
            <button
              class="flex items-center mt-auto  text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">ENROLL NOW
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </button>
            <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</p>
          </div>
        </div>
        <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
          <div class="h-full p-6  rounded-lg border-2 border-orange-500 flex flex-col relative overflow-hidden">
            <span
              class="bg-orange-500 text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">POPULAR</span>
            <h2 class="text-sm tracking-widest  title-font mb-1 font-medium">PRO</h2>
            <h1
              class="text-5xl text-orange-500 text-white leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
              <span>$380</span>
              <span class="text-lg ml-1 font-normal text-gray-500">/yr</span>
            </h1>
            <p class="flex items-center text-white   mb-2">
              <span
                class="w-4 h-4 mr-2  inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Free riding
            </p>
            <p class="flex items-center text-white  mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Unlimited equipments
            </p>
            <p class="flex items-center text-white  mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Personal trainer
            </p>
            <p class="flex items-center text-white  mb-6">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Weight losing classes
            </p>
            <button
              class="flex items-center mt-auto text-white bg-orange-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-indigo-600 rounded">ENROLL NOW
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </button>
            <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</p>
          </div>
        </div>
        <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
          <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
            <h2 class="text-sm tracking-widest title-font mb-1 font-medium">BUSINESS</h2>
            <h1
              class="text-5xl text-orange-500 text-white leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
              <span>$560</span>
              <span class="text-lg ml-1 font-normal text-gray-500">/yr</span>
            </h1>
            <p class="flex items-center text-white  mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Free riding
            </p>
            <p class="flex items-center text-white mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Unlimited equipments
            </p>
            <p class="flex items-center text-white mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Personal trainer
            </p>
            <p class="flex items-center text-white mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Weight losing classes
            </p>
            <p class="flex items-center text-white mb-6">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Month to mouth
            </p>
            <button
              class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">ENROLL NOW
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </button>
            <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</p>
          </div>
        </div>
        <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
          <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
            <h2 class="text-sm tracking-widest title-font mb-1 font-medium">SPECIAL</h2>
            <h1
              class="text-5xl text-orange-500 text-white leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
              <span>$720</span>
              <span class="text-lg ml-1 font-normal text-gray-500">/yr</span>
            </h1>
            <p class="flex items-center text-white mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Free riding
            </p>
            <p class="flex items-center text-white mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Unlimited equipments
            </p>
            <p class="flex items-center text-white mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Personal trainer
            </p>
            <p class="flex items-center text-white mb-2">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Weight losing classes
            </p>
            <p class="flex items-center text-white mb-6">
              <span
                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                  class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Month to mouth
            </p>
            <button
              class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">ENROLL NOW
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
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
            <img alt="gallery" class="w-full  object-cover h-full object-center block"
              src="https://source.unsplash.com/500x300/?boxing">
          </div>
          <div class="md:p-2 p-1 w-1/2">
            <img alt="gallery" class="w-full object-cover h-full object-center block"
              src="https://source.unsplash.com/501x301/?fitness">
          </div>
          <div class="md:p-2 p-1 w-full">
            <img alt="gallery" class="w-full h-full object-cover object-center block"
              src="https://source.unsplash.com/600x360/?fit">
          </div>
        </div>
        <div class="flex flex-wrap w-1/2">
          <div class="md:p-2 p-1 w-full">
            <img alt="gallery" class="w-full h-full object-cover object-center block"
              src="https://source.unsplash.com/601x361/?gym">
          </div>
          <div class="md:p-2 p-1 w-1/2">
            <img alt="gallery" class="w-full object-cover h-full object-center block"
              src="https://source.unsplash.com/502x302/?strength">
          </div>
          <div class="md:p-2 p-1 w-1/2">
            <img alt="gallery" class="w-full object-cover h-full object-center block"
              src="https://source.unsplash.com/503x303/?cardio">
          </div>
        </div>
      </div>
    </div>
  </section>




  <section class=" bg-zinc-900  body-font">
    <div class="px-5 mx-28  mx-auto flex items-center md:flex-row flex-col">
      <div class="flex flex-col md:pr-10 md:mb-0 mb-6 pr-0 w-full md:w-auto md:text-left text-center">
        <h2 class="text-xs text-orange-500 tracking-widest font-medium title-font mb-1">OUR TEAM </h2>
        <h1 class="md:text-3xl text-2xl text-white font-medium title-font ">TRAIN WITH EXPERTS</h1>
      </div>

      <div class="  px-5 py-10 ml-auto">
        <div class="lg:w-2/3 flex flex-col sm:flex-row sm:items-center items-start mx-auto">
          <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-gray-900"></h1>
          <a
            href="appointment.php" class="mt-3 p-3 px-5 pointer text-white inline-flex mr-4 items-center border-2 border-orange-500">APPOINTMENT</a>
        </div>

      </div>


  </section>




  <div class="container pb-12 bg-zinc-900 px-5 mx-auto">
    <div class="flex mx-24 flex-wrap -m-4">
      <div class="p-4 md:w-1/3">
        <div class="h-full  border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center"
            src="https://source.unsplash.com/720x400/?boxing" alt="blog">
          <div class="p-6">

            <h1 class="title-font text-lg font-medium text-white mb-3">Athart Rachel</h1>
            <p class="leading-relaxed text-gray-400 mb-3">Gym Trainer</p>

          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="h-full  border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://source.unsplash.com/721x401/?gym"
            alt="blog">
          <div class="p-6">

            <h1 class="title-font text-lg font-medium text-white  mb-3">Athart Rachel</h1>
            <p class="leading-relaxed text-gray-400 mb-3">Gym Trainer</p>

          </div>
        </div>
      </div>
      <div class="p-4 md:w-1/3">
        <div class="h-full  border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-48 md:h-36 w-full object-cover object-center"
            src="https://source.unsplash.com/722x402/?fitness" alt="blog">
          <div class="p-6">

            <h1 class="title-font text-lg font-medium text-white mb-3">Athart Rachel</h1>
            <p class="leading-relaxed text-gray-400 mb-3">Gym Trainer</p>

          </div>
        </div>
      </div>
    </div>
  </div>

  <hr>


  <section class="text-gray-600 bg-zinc-800 body-font">
    <div class="container px-5  mx-auto">

      <div class="flex flex-wrap -m-4">
        <div class="p-4 md:w-1/3">
          <div class="flex rounded-lg text-white h-full p-8 flex-col">
            <div class="flex items-center mb-3">
              <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-zinc-500 hover:bg-orange-500 bg-orange-500 text-white flex-shrink-0">
                <svg class="svg-icon w-7 h-7"  stroke="white"   viewBox="0 0 20 20">
                  <path d="M10,1.375c-3.17,0-5.75,2.548-5.75,5.682c0,6.685,5.259,11.276,5.483,11.469c0.152,0.132,0.382,0.132,0.534,0c0.224-0.193,5.481-4.784,5.483-11.469C15.75,3.923,13.171,1.375,10,1.375 M10,17.653c-1.064-1.024-4.929-5.127-4.929-10.596c0-2.68,2.212-4.861,4.929-4.861s4.929,2.181,4.929,4.861C14.927,12.518,11.063,16.627,10,17.653 M10,3.839c-1.815,0-3.286,1.47-3.286,3.286s1.47,3.286,3.286,3.286s3.286-1.47,3.286-3.286S11.815,3.839,10,3.839 M10,9.589c-1.359,0-2.464-1.105-2.464-2.464S8.641,4.661,10,4.661s2.464,1.105,2.464,2.464S11.359,9.589,10,9.589"></path>
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
              <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-zinc-500 hover:bg-orange-500 text-white flex-shrink-0">
                <svg fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7" viewBox="0 0 24 25">
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
              <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-zinc-500  hover:bg-orange-500  flex-shrink-0">
              <svg class="svg-icon w-7 h-7   " stroke="white" viewBox="0 0 20 20">
							<path d="M16.469,8.924l-2.414,2.413c-0.156,0.156-0.408,0.156-0.564,0c-0.156-0.155-0.156-0.408,0-0.563l2.414-2.414c1.175-1.175,1.175-3.087,0-4.262c-0.57-0.569-1.326-0.883-2.132-0.883s-1.562,0.313-2.132,0.883L9.227,6.511c-1.175,1.175-1.175,3.087,0,4.263c0.288,0.288,0.624,0.511,0.997,0.662c0.204,0.083,0.303,0.315,0.22,0.52c-0.171,0.422-0.643,0.17-0.52,0.22c-0.473-0.191-0.898-0.474-1.262-0.838c-1.487-1.485-1.487-3.904,0-5.391l2.414-2.413c0.72-0.72,1.678-1.117,2.696-1.117s1.976,0.396,2.696,1.117C17.955,5.02,17.955,7.438,16.469,8.924 M10.076,7.825c-0.205-0.083-0.437,0.016-0.52,0.22c-0.083,0.205,0.016,0.437,0.22,0.52c0.374,0.151,0.709,0.374,0.997,0.662c1.176,1.176,1.176,3.088,0,4.263l-2.414,2.413c-0.569,0.569-1.326,0.883-2.131,0.883s-1.562-0.313-2.132-0.883c-1.175-1.175-1.175-3.087,0-4.262L6.51,9.227c0.156-0.155,0.156-0.408,0-0.564c-0.156-0.156-0.408-0.156-0.564,0l-2.414,2.414c-1.487,1.485-1.487,3.904,0,5.391c0.72,0.72,1.678,1.116,2.696,1.116s1.976-0.396,2.696-1.116l2.414-2.413c1.487-1.486,1.487-3.905,0-5.392C10.974,8.298,10.55,8.017,10.076,7.825"></path>
						</svg>
              </div>
              <h2 class=" text-lg title-font font-medium">Support.gymcenter@gmail.com</h2>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>




  <footer class="text-white box-content w-140 bg-black body-font">
  <div
      class="container px-10   pt-5  md:items-center  lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
      <div class="flex flex-wrap	justify-between  	">

      <div class="w-80 mb-4  md:mx-0  text-center md:text-left">
        <a class="flex title-font justify-center font-medium items-center  text-gray-900">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEIAAABCCAYAAADjVADoAAAABmJLR0QA/wD/AP+gvaeTAAACmUlEQVR4nO3aP2gTYRjH8e977ZCTpCHSIjpoF13908nFTXFxULCLugui0KH+w4YjLVQLoeDkLOpQwVkrOHfx36i4WFEHCyFNbArqPQ59FUl7zb3xTaLl+Yy5u+ee+93dm+O9A6WUUkoppZRSSinVE6adjeoTnBU4DWxrWhQbw+vGKpNDM9T+vr31vlwmF2aYEGE/EDQtXjHwMDvJPde6/a4bLE9wWAx3SQhR4FgmJAQuutZOI5NhWuBC0ikUOFGNeJePWHCp25xoSwYO0upKEkZc6zo41GK5CX60XGcd5yBSbtPWLZdSmtrOx9VOEFvSpmNEvcgYcEkgD8zlSpzvTlt+1IrcAUYNVIHb2RKzSesmXhHVG+wVKAsMAwVZ/w/xz7M9FwSGBcrLEfuS1k0Moq+fPXT2Xu82E6yd1A3pGGFpEJYGYf3+16gXOSowjfAhN8lJH8VljLCaZ6ePWvkqn80sDR+1akUeAbsNXMuWeAo2CAFThwfAoBhiHzsD+JrjSF/MY0+1jgNPfNQysEtgROC+wA4DEgBUrjAADPrYyX9myB67jhG/aBCWBmFpEJYGYQUAhZAasNTjXnphqXCLZbDPESYirkeckZibRvjoay8S8I2Yirdangh8Al6agKsGBP54ssxGzAPzvnYGkIt4Bmz3WdOHXIlTzb/pGGFpEJYGYSUGEcMidiDZIiT+zvukhYlBDES8NTDOWiAVAyud6K6TbM8VYNHA+MAUb5LW3XQWO1uiDJQ999c1dtY91cy7jhFWO0Gkmbjp5NiSprbz5JJzEHEfL1o2Y3juWje11rXF9ujE+W14PmKhXuScCKNs9FlAwKtGgynXummtNrgehqxIzAE2+izAMOf6JlwppZRSSimllFJK9dBPt2GhAuWOHs8AAAAASUVORK5CYII=">
        <span class="ml-3 text-orange-400 text-2xl">H-Fitness</span>
        </a>
        <p class="mt-2 text-sm text-gray-400">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo alias non
          culpa. At esse laborum pariatur, nobis ipsum iste doloremque eum, obcaecati atque excepturi qui saepe eveniet?
          Tempore, ducimus esse!</p>
      </div>
      
        <div class="lg:w-1/4 md:w-1/2  w-full pl-4 ">
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
        <div class="lg:w-1/4 md:w-1/2 w-full ">
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
        <div class="lg:w-1/4 md:w-1/2 w-full ">
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
  </footer>


  <script>
    window.onscroll = function () { myFunction() };

    var header = document.getElementById("header");
    var sticky = header.offsetTop;

    function myFunction() {
      if (window.pageYOffset >= sticky) {
        header.classList.add("sticky")
      } else {
        header.classList.remove("sticky");
      }
    }
  </script>

</body>

</html>
