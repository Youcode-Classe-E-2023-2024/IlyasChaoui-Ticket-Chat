<link rel="stylesheet" href="./assets/css/home.css">
<title><?= ucfirst($page) ?></title>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.x/dist/tailwind.min.css" rel="stylesheet">

<body>
<br>
<div class="w-full text-white">
    <div x-data="{ open: false }"
         class="w-full fixed top-0 h-28 flex flex-col  mx-auto md:items-center  md:flex-row md:px-4 lg:px-4"
    style=" z-index: 100">
        <div class="flex flex-row align-center justify-between">
            <a href="#"><img src="./assets/pictures/logo.png" class="w-96" alt="helllooo"></a>
            <button class="text-white md:hidden rounded-lg focus:outline-none focus:shadow-outline"
                    @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd"
                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                          clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd"
                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}"
             class="flex flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
            <!-- <a class="px-4 py-2 mt-2 text-lg font-semibold  bg-gray-200 rounded-lg bg-gray-700 hover:bg-yellow-600  focus:text-white hover:text-white text-gray-200 md:mt-0 bg-yellow-600"
                href="
      #">Blog</a>
            <a class="px-4 py-2 mt-2 text-lg font-semibold bg-transparent rounded-lg bg-transparent hover:bg-yellow-600  focus:text-white hover:text-white text-gray-200 md:mt-0 md:ml-4 bg-yellow-600"
                href="
      #">Portfolio</a> -->




            <?php if(!isset($_SESSION['login'])) { ?>
            <form action="index.php?page=login" method="POST">
                <button  class="button">
                    <span class="button_lg">
                        <span class="button_sl"></span>
                        <span class="button_text">Login Now</span>
                    </span>
                </button>
            </form>
            <?php }else { ?>
            <form action="index.php?page=discussion" method="POST">
                <button  class="button">
                    <span class="button_lg">
                        <span class="button_sl"></span>
                        <span class="button_text">Open Chat</span>
                    </span>
                </button>
            </form>
            <?php } ?>

            <form action="index.php?page=home" method="post" class="sp">
            <?php if (isset($_SESSION['login'])) {

                echo '<button type="submit" name="logout" class="sparkle-button">
                    <span class="spark"></span>

                    <span class="backdrop"></span>
                    <svg fill="#ffffff" height="30px" width="200px" version="1.1" id="Capa_1"
                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         viewBox="0 0 384.971 384.971" xml:space="preserve" stroke="#ffffff">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <g id="Sign_Out">
                                    <path
                                            d="M180.455,360.91H24.061V24.061h156.394c6.641,0,12.03-5.39,12.03-12.03s-5.39-12.03-12.03-12.03H12.03 C5.39,0.001,0,5.39,0,12.031V372.94c0,6.641,5.39,12.03,12.03,12.03h168.424c6.641,0,12.03-5.39,12.03-12.03 C192.485,366.299,187.095,360.91,180.455,360.91z">
                                    </path>
                                    <path
                                            d="M381.481,184.088l-83.009-84.2c-4.704-4.752-12.319-4.74-17.011,0c-4.704,4.74-4.704,12.439,0,17.179l62.558,63.46H96.279 c-6.641,0-12.03,5.438-12.03,12.151c0,6.713,5.39,12.151,12.03,12.151h247.74l-62.558,63.46c-4.704,4.752-4.704,12.439,0,17.179 c4.704,4.752,12.319,4.752,17.011,0l82.997-84.2C386.113,196.588,386.161,188.756,381.481,184.088z">
                                    </path>
                                </g>
                                <g> </g>
                                <g> </g>
                                <g> </g>
                                <g> </g>
                                <g> </g>
                                <g> </g>
                            </g>
                        </g>
                        </svg>
                    <span class="text">Logout</span>
                </button>';
            }
                ?>
            </form>




        </nav>
    </div>
    <section class="">
        <div class="grid max-w-screen-xl px-4 py-36 mx-auto lg:gap-8 xl:gap-0 lg:py-42 lg:grid-cols-12">
            <div class="mr-auto mt-36 place-self-center lg:col-span-7">
                <h1 data-m="bounce-right"
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl ">
                    24/7
                    Avito's Chat Room</h1>
                <p data-m="bounce-right"
                   class="max-w-2xl mb-6 font-sans text-gray-300 lg:mb-8 md:text-lg lg:text-xl ">
                    Step into Avito's Chat Room and engage in endless conversations, making your chat experience
                    vibrant
                    and dynamic 24/7
                    with a variety of interactive options!
                </p>
                <button class="btn"><span>JOIN US</span></button>
            </div>

        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#6d0003" fill-opacity="1"
                  d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <section class="section-1">
        <!--
    <h1 class="text-center mx-auto text-white text-3xl py-32 lg:text-6xl"><span style="color: #e6aa1f;"> 24/7 </span> lofi radio bot with multiple radio stations & Hindi lofi</h1>
     -->
        <section class="">
            <div data-m="bounce-right"
                 class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                <img class="w-full dark:hidden" src="./assets/pictures/Discord_Dark.png" alt="dashboard image">
                <img class="w-full hidden dark:block" src="./assets/pictures/Discord_Dark.png" alt="dashboard image">

                <div data-m="bounce-left" class="mt-4 md:mt-0">
                    <h2 class="mb-4 tracking-wide text-5xl tracking-tight font-extrabold text-white "><span
                                style="color: #e6aa1f; position: relative;">24/7<img style="position: absolute;"
                                                                                     src="./assets/pictures/line-1.gif" width="75px" /></span> Avito's Chat Room in your
                        own
                        server
                        without any
                        subscriptions</h2>
                    <p class="mb-6 font-light text-gray-500 md:text-lg ">Delve into the world of Avito's Chat Room,
                        where we offer a rich selection of discussion topics across various
                        categories for everyone. <br> Pick your preferred topic and dive into the conversation to
                        start
                        your engaging journey
                        with us!"<span class="badge badge-lg"></span></p>
                    <a href="#" class="inline-flex items-center text-black bg-white rounded px-5 py-2">
                        Invite Now
                        <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>
    </section>
    <section style="background-color: #e6aa1f;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#6d0003" fill-opacity="1"
                  d="M0,256L48,250.7C96,245,192,235,288,208C384,181,480,139,576,106.7C672,75,768,53,864,69.3C960,85,1056,139,1152,165.3C1248,192,1344,192,1392,192L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg>
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20"
             id="features">
            <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <div>
                    <p
                            class="inline-block px-3 py-px mt-22 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                        FEATURES
                    </p>
                </div>
                <h2
                        class="max-w-lg mb-6  text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                        <span class="relative inline-block">

                            <span class="relative">What</span>
                        </span>
                    exactly does Avito's Chat Room Beats offer?
                </h2>
                <p class="text-base text-gray-700 md:text-lg">
                    Learn why you should start using Avito's Chat Room now.
                </p>
            </div>
            <div
                    class="grid max-w-screen-lg mx-auto space-y-6 lg:grid-cols-2 lg:space-y-0 lg:divide-x items-center text-center">
                <div class="space-y-6 sm:px-16 mx-auto">
                    <div class="flex flex-col max-w-md sm:flex-row items-center">
                        <div class="mb-4 mr-4">
                            <div class="flex items-center justify-center w-12 h-12 rounded-full ">
                                <svg fill="#ffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M21.3,10.08A3,3,0,0,0,19,9H14.44L15,7.57A4.13,4.13,0,0,0,11.11,2a1,1,0,0,0-.91.59L7.35,9H5a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H17.73a3,3,0,0,0,2.95-2.46l1.27-7A3,3,0,0,0,21.3,10.08ZM7,20H5a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H7Zm13-7.82-1.27,7a1,1,0,0,1-1,.82H9V10.21l2.72-6.12A2.11,2.11,0,0,1,13.1,6.87L12.57,8.3A2,2,0,0,0,14.44,11H19a1,1,0,0,1,.77.36A1,1,0,0,1,20,12.18Z" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h6 class="mb-3 text-xl font-bold leading-5">User-Friendly Experience</h6>
                            <p class="text-sm text-gray-900">
                                Just enter Avito's Chat Room and type <span class="badge">topic</span> or <span
                                        class="badge">discuss</span>.
                                Instant access to engaging discussions, designed for ease of use with
                                straightforward
                                commands.
                            </p>

                        </div>
                    </div>
                    <div class="flex flex-col max-w-md sm:flex-row items-center">
                        <div class="mb-4 mr-4 ">
                            <div class="flex items-center justify-center w-12 h-12 rounded-full ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>

                            </div>
                        </div>
                        <div>
                            <h6 class="mb-3 text-xl font-bold leading-5">24/7*</h6>
                            <p class="text-sm text-gray-900">
                                Our bot offers 24/7 playback. The bot will always be connected to the VC playing
                                amazing
                                Avito's Chat Room.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col max-w-md sm:flex-row items-center">
                        <div class="mb-4 mr-4">
                            <div class="flex items-center justify-center w-12 h-12 rounded-full ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                </svg>

                            </div>
                        </div>
                        <div>
                            <h6 class="mb-3 text-xl font-bold leading-5">Best Avito's Chat Room</h6>
                            <p class="text-sm text-gray-900">
                                The best selection of Avito's Chat Room right at your fingertips. Our bot offers multiple
                                streams and genres of
                                Avito's Chat Room.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="space-y-6 sm:px-16">
                    <div class="flex flex-col max-w-md sm:flex-row items-center">
                        <div class="mb-4 mr-4">
                            <div class="flex items-center justify-center w-12 h-12 rounded-full ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M19.114 5.636a9 9 0 010 12.728M16.463 8.288a5.25 5.25 0 010 7.424M6.75 8.25l4.72-4.72a.75.75 0 011.28.53v15.88a.75.75 0 01-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 012.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75z" />
                                </svg>

                            </div>
                        </div>
                        <div>
                            <h6 class="mb-3 text-xl font-bold leading-5">Amazing Quality</h6>
                            <p class="text-sm text-gray-900">
                                We aim to provide the highest quality audio to ensure an enjoyable listening
                                experience.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col max-w-md sm:flex-row items-center">
                        <div class="mb-4 mr-4">
                            <div class="flex items-center justify-center w-12 h-12 rounded-full ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                                </svg>

                            </div>
                        </div>
                        <div>
                            <h6 class="mb-3 text-xl font-bold leading-5">Awesome Support</h6>
                            <p class="text-sm text-gray-900">
                                Join our discord server for 24/7 support if you encounter any issues or have any
                                questions.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col max-w-md sm:flex-row items-center">
                        <div class="mb-4 mr-4">
                            <div class="flex items-center justify-center w-12 h-12 rounded-full ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M8.288 15.038a5.25 5.25 0 017.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 011.06 0z" />
                                </svg>

                            </div>
                        </div>
                        <div>
                            <h6 class="mb-3 text-xl font-bold leading-5">99% uptime</h6>
                            <p class="text-sm text-gray-900">
                                Backend systems are regularly being maintained and updated to ensure stability and
                                reliability.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-white  text-center">Lofi Beats Live stats</h2>
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20 content-center item-center">

  <div class="grid grid-cols-3 row-gap-8 md:grid-cols-3 text-white ">
    <div class="text-center md:border-r ">
      <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl server"></h6>
      <p class="text-sm font-medium tracking-widest text-white uppercase lg:text-base">
        Servers
      </p>
    </div>

      <div class="text-center md:border-r ">
        <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl time"></h6>
        <p class="text-sm font-medium tracking-widest text-white uppercase lg:text-base">
          Uptime
        </p>
      </div>
    <div class="text-center   ">
      <h6 class="text-4xl font-bold lg:text-5xl xl:text-6xl user"></h6>
      <p class="text-sm font-medium tracking-widest text-white uppercase lg:text-base">
        Users
      </p>
    </div>

  </div>
</div> -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#00000" fill-opacity="1"
                  d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <section class="bg-black">
        <!-- MDI Icons -->


        <!-- Page Container -->
        <div class="flex items-center justify-center min-h-screen  py-48">
            <div class="flex flex-col">
                <!-- Notes -->


                <div class="flex flex-col mt-8">
                    <!-- Meet the Team -->
                    <div class="container max-w-7xl px-4">
                        <!-- Section Header -->
                        <div class="flex flex-wrap justify-center text-center mb-24">
                            <div class="w-full lg:w-6/12 px-4">
                                <!-- Header -->
                                <h1 class="text-white text-4xl font-bold mb-8">
                                    Meet the Team
                                </h1>

                                <!-- Description -->
                                <p class="text-gray-300 text-lg font-light">

                                </p>
                            </div>
                        </div>

                        <!-- Team Members -->
                        <div class="flex flex-wrap justify-center">
                            <!-- Member #1 -->
                            <div class="w-full md:w-6/12 lg:w-4/12 mb-6 px-6 sm:px-6 lg:px-4">
                                <div class="flex flex-col">
                                    <!-- Avatar -->
                                    <a href="#" class="mx-auto">
                                        <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                             src="https://intranet.youcode.ma/storage/users/profile/1002-1696615923.jpg">
                                    </a>

                                    <!-- Details -->
                                    <div class="text-center mt-6">
                                        <!-- Name -->
                                        <h1 class="text-white text-xl font-bold mb-1">
                                            Chaoui Ilyas
                                        </h1>

                                        <!-- Title -->
                                        <div class="text-gray-200 text-sm font-light mb-2">
                                            Front-end Developer
                                        </div>

                                        <!-- Social Icons -->
                                        <div class="flex items-center justify-center opacity-50 hover:opacity-100
                                transition-opacity duration-300">
                                            <!-- Linkedin -->
                                            <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                                                <i class="mdi mdi-linkedin text-indigo-500 mx-auto mt-2"></i>
                                            </a>

                                            <!-- Twitter -->
                                            <a href="#" class="flex rounded-full hover:bg-blue-50 h-10 w-10">
                                                <i class="mdi mdi-twitter text-blue-300 mx-auto mt-2"></i>
                                            </a>

                                            <!-- Instagram -->
                                            <a href="#" class="flex rounded-full hover:bg-orange-50 h-10 w-10">
                                                <i class="mdi mdi-instagram text-orange-400 mx-auto mt-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Member #2 -->
                            <div class="w-full md:w-6/12 lg:w-4/12 mb-6 px-6 sm:px-6 lg:px-4">
                                <div class="flex flex-col">
                                    <!-- Avatar -->
                                    <a href="#" class="mx-auto">
                                        <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                             src="https://intranet.youcode.ma/storage/users/profile/978-1696615957.jpg"
                                             width="520">

                                    </a>

                                    <!-- Details -->
                                    <div class="text-center mt-6">
                                        <!-- Name -->
                                        <h1 class="text-white text-xl font-bold mb-1">
                                            Kholod Sanak
                                        </h1>

                                        <!-- Title -->
                                        <div class="text-gray-200 text-sm font-light mb-2">
                                            Web & Bot Developer
                                        </div>

                                        <!-- Social Icons -->
                                        <div class="flex items-center justify-center opacity-50 hover:opacity-100
                                transition-opacity duration-300">
                                            <!-- Linkedin -->
                                            <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                                                <i class="mdi mdi-linkedin text-indigo-700 mx-auto mt-2"></i>
                                            </a>

                                            <!-- Twitter -->
                                            <a href="#" class="flex rounded-full hover:bg-blue-50 h-10 w-10">
                                                <i class="mdi mdi-twitter text-blue-400 mx-auto mt-2"></i>
                                            </a>

                                            <!-- Instagram -->
                                            <a href="#" class="flex rounded-full hover:bg-orange-50 h-10 w-10">
                                                <i class="mdi mdi-instagram text-orange-400 mx-auto mt-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Memeber #3-->
                            <div class="w-full md:w-6/12 lg:w-4/12 mb-6 px-6 sm:px-6 lg:px-4">
                                <div class="flex flex-col">
                                    <!-- Avatar -->
                                    <a href="#" class="mx-auto">
                                        <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                             src="https://intranet.youcode.ma/storage/users/profile/970-1696615872.jpg" width="520">

                                    </a>

                                    <!-- Details -->
                                    <div class="text-center mt-6">
                                        <!-- Name -->
                                        <h1 class="text-white text-xl font-bold mb-1">
                                            Anass Benfillous
                                        </h1>

                                        <!-- Title -->
                                        <div class="text-gray-200 text-sm font-light mb-2">
                                            Back-end Developer
                                        </div>

                                        <!-- Social Icons -->
                                        <div class="flex items-center justify-center opacity-50 hover:opacity-100
                                                                transition-opacity duration-300">
                                            <!-- Linkedin -->
                                            <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                                                <i class="mdi mdi-linkedin text-indigo-700 mx-auto mt-2"></i>
                                            </a>

                                            <!-- Twitter -->
                                            <a href="#" class="flex rounded-full hover:bg-blue-50 h-10 w-10">
                                                <i class="mdi mdi-twitter text-blue-400 mx-auto mt-2"></i>
                                            </a>

                                            <!-- Instagram -->
                                            <a href="#" class="flex rounded-full hover:bg-orange-50 h-10 w-10">
                                                <i class="mdi mdi-instagram text-orange-400 mx-auto mt-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=" text-gray-100 px-8 py-12 bg-black" id="contact">

        <div class="text-center w-full">
<!--            <svg class="text-gray-100 h-8 mx-auto" fill=currentColor viewBox="0 0 150 29" version="1.1"-->
<!--                 xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">-->
<!---->
<!--            </svg>-->
        </div>
        <div class="max-w-screen-xl mt-24 px-8 grid gap-8 grid-cols-1 md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 py-16 mx-auto  bg-opacity-10 blur-5xl text-gray-900 rounded-lg shadow-lg "
             style="background-image: url(https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/b3be1dae-3caa-4d45-be6c-3de586ba95e2/deph4ko-907df8a7-0773-40d4-90cb-24d3399585d4.jpg/v1/fill/w_1192,h_670,q_70,strp/midnight_moon_by_bisbiswas_deph4ko-pre.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9OTAwIiwicGF0aCI6IlwvZlwvYjNiZTFkYWUtM2NhYS00ZDQ1LWJlNmMtM2RlNTg2YmE5NWUyXC9kZXBoNGtvLTkwN2RmOGE3LTA3NzMtNDBkNC05MGNiLTI0ZDMzOTk1ODVkNC5qcGciLCJ3aWR0aCI6Ijw9MTYwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.ExS5mNkE5jQPAwHqnCUmpam_IZX1h8sFmTUxRjt3GPE); background-size: cover ;">
            <div class="flex flex-col justify-between">
                <div>
                    <h2 class="text-4xl lg:text-5xl font-bold leading-tight text-white">Lets talk about everything!
                    </h2>

                    <div class="text-gray-100 mt-8">
                        Hate forms? Send us an <span class="font-bold text-red-400"><a
                                    href="mailto: rohitk290106@gmail.com">Email</a></span> instead.
                    </div>
                    <div class="text-gray-100 ">
                        Contact us on <i class="fab fa-whatsapp font-bold text-green-300"> </i> <a
                                href="https://api.whatsapp.com/send?phone=" class="font-bold text-green-300">Whatsapp
                        </a>
                    </div><br>
                    <ul>
                        <li class="mt-6 lg:mt-0">
                            <div class="flex">
                                    <span
                                            class="flex-shrink-0 flex items-center justify-center h-6 w-6 rounded-full bg-green-100 text-green-800 dark:text-green-500 drark:bg-transparent">
                                        <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                  clip-rule="evenodd">
                                            </path>
                                        </svg>
                                    </span>
                                <span class="ml-4 text-base leading-6 font-medium text-gray-200">
                                        We will response within few business days
                                    </span>
                            </div>
                        </li>
                        <br>
                        <li class="mt-6 lg:mt-0">

                        </li>
                    </ul>
                </div>

            </div>


            <form onsubmit="alert(done)" action="https://formsubmit.io/send/f146116b-b77e-4c4b-b646-e3ec8b8160b7"
                  method="POST" id="my-form">
                <div>

                    <label for="fullname" class="uppercase text-sm text-white font-bold">Full Name</label>
                    <input required type="text" id="fullName" name="fullName"
                           class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                           placeholder="">
                    <input name="_redirect" type="hidden" id="name"
                           value="https://rasproduction.studio/public/pages/thanks.html">
                </div>
                <div class="mt-8">
                    <label for="email" class="uppercase text-sm text-white font-bold">Email</label>
                    <input required id="email" name="email"
                           class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                           type="email">
                </div>
                <div class="mt-8">
                    <label class="uppercase text-sm text-white font-bold">Message</label>
                    <textarea required name="comment" id="comment" rows="3"
                              class="w-full h-32 bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                              cols="10" rows="10"></textarea>
                </div>
                <div class="captcha">
                    <div class="g-recaptcha" data-sitekey="6Lf-srYgAAAAADAr79VuhLoG-xKfQSs_fCTr8_G-"
                         data-callback="verifyCaptcha"></div>
                </div>
                <div id="g-recaptcha-error"></div>
                <div class="mt-8">
                    <input type="submit" onclick="checkRecaptcha();" value="Send" id="submit"
                           class="modal-open uppercase text-sm font-bold tracking-wide cursor-pointer bg-indigo-500 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">

                </div>
            </form>
        </div>




        <div id="status"></div>

    </section>
    <footer class="bg-white dark:bg-gray-900">
        <div class="container p-6 mx-auto">
            <div class="lg:flex">
                <div class="w-full -mx-6 lg:w-2/5">
                    <div class="px-6">
                        <div>
                            <a href="#"
                               class="text-xl font-bold text-gray-800 dark:text-white hover:text-gray-700 dark:hover:text-gray-300">Avito's
                                Chat Room</a>
                        </div>

                        <p class="max-w-sm mt-2 text-gray-500 dark:text-gray-400">The Smartest Avito's Chat Room Radio Bot on
                            discord. Live
                            streaming high quality Avito's Chat Room 24/7</p>

                        <div class="flex mt-6 -mx-2">
                            <a href="#"
                               class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                               aria-label="Reddit">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                                    </path>
                                </svg>
                            </a>

                            <a href="#"
                               class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                               aria-label="Facebook">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                                    </path>
                                </svg>
                            </a>

                            <a href="#"
                               class="mx-2 text-gray-600 transition-colors duration-300 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400"
                               aria-label="Github">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mt-6 lg:mt-0 lg:flex-1">
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                        <div>
                            <h3 class="text-gray-700 uppercase dark:text-white">Get Links</h3>
                            <a href="#"
                               class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Discord
                                server</a>
                            <a href="#"
                               class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Invite
                                the
                                bot</a>
                            <a href="#"
                               class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Terms &
                                Conditions</a>
                            <a href="#"
                               class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Legal
                                notices</a>
                        </div>

                        <div>
                            <h3 class="text-gray-700 uppercase dark:text-white">Find us online</h3>
                            <a href="#"
                               class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">Top.gg</a>

                        </div>



                        <div>
                            <h3 class="text-gray-700 uppercase dark:text-white">Contact</h3>

                            <span
                                    class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">support@Avito'sChatRoom.tk</span>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="h-px my-6 bg-gray-200 border-none dark:bg-gray-700">

            <div>
                <p class="text-center text-gray-500 dark:text-gray-400">© Avito's Chat Room <span id="date"></span> - All
                    rights
                    reserved</p>
            </div>
        </div>
    </footer>
    <script src="<?= PATH ?>assets/js/home.js"></script>
    <script>
        const d = new Date();
        let year = d.getFullYear();
        document.getElementById("date").innerHTML = year;
    </script>
</body>