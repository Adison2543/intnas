<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- icon  -->
        <link rel="icon" href="img/dronecamera.png" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet" />

        {{-- jQuery  --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

        {{-- owl carousel --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

        {{-- aos animations --}}
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


        <!-- Scripts -->
        @vite([
            // CSS
            'resources/css/app.css',
            'resources/css/pavo/fontawesome-all.css',
            'resources/css/pavo/magnific-popup.css',
            'resources/css/pavo/styles.css',
            'resources/css/pavo/swiper.css',

            // JS
            'resources/js/app.js',
            'resources/js/pavo/scripts.js',
        ])
    </head>
    <body data-spy="scroll" data-target=".fixed-top">

        <!-- Navigation -->
        <nav class="navbar fixed-top">
            <div class="container sm:px-4 lg:px-8 flex flex-wrap items-center justify-between lg:flex-nowrap">

                <!-- Text Logo - Use this if you don't have a graphic logo -->
                <!-- <a class="text-gray-800 font-semibold text-3xl leading-4 no-underline page-scroll" href="index.html">Pavo</a> -->

                <!-- Image Logo -->
                <a class="inline-block mr-4 py-0.5 text-xl whitespace-nowrap hover:no-underline focus:no-underline" href="">
                    <img src="/img/logodronettc.png" alt="alternative" class="h-8" />
                </a>

                <button class="background-transparent rounded text-xl leading-none hover:no-underline focus:no-underline lg:hidden lg:text-gray-400" type="button" data-toggle="offcanvas">
                    <span class="navbar-toggler-icon inline-block w-8 h-8 align-middle"></span>
                </button>

                <div class="navbar-collapse offcanvas-collapse lg:flex lg:flex-grow lg:items-center" id="navbarsExampleDefault">
                    <ul class="pl-0 mt-3 mb-2 ml-auto flex flex-col list-none lg:mt-0 lg:mb-0 lg:flex-row">
                        {{-- <li>
                            <a class="nav-link page-scroll" href="/home">Home</a>
                        </li> --}}
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="/home" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item page-scroll" href="#header">Home</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item page-scroll" href="#features">Features</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item page-scroll" href="#details">Details</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item page-scroll" href="#pricing">Pricing</a>
                            </div>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="/products">Product</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="/services">Service</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="/blogs">News</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="/activity">Activity</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="/contacts">Contacts</a>
                        </li>
                        {{-- <li>
                            <a class="nav-link page-scroll active" href="#header">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#features">Features</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#details">Details</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#pricing">Pricing</a>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Drop</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item page-scroll" href="/portfolio">Portfolio</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item page-scroll" href="#">Terms Conditions</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item page-scroll" href="#">Privacy Policy</a>
                            </div>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#download">Download</a>
                        </li> --}}
                    </ul>
                </div> <!-- end of navbar-collapse -->
            </div> <!-- end of container -->
        </nav> <!-- end of navbar -->
        <!-- end of navigation -->

        {{ $slot }}

        <!-- Footer -->
        <div class="footer">
            <div class="container px-4 sm:px-8">
                <h4 class="mb-8 lg:max-w-3xl lg:mx-auto">Pavo is a mobile application for marketing automation and you can reach the team at <a class="text-indigo-600 hover:text-gray-500" href="mailto:Dronettc@iddrives.co.th">Dronettc@iddrives.co.th</a></h4>
                <div class="social-container">
                    <span class="fa-stack">
                        <a href="https://www.facebook.com/dronettc" target="_Blank">
                            <i class="fas fa-circle fa-stack-2x fa-stack-fb" ></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="https://lin.ee/UDqzxmt" target="_Blank">
                            <i class="fas fa-circle fa-stack-2x fa-stack-ln"></i>
                            <i class="fab fa-line fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="/contacts">
                            <i class="fas fa-circle fa-stack-2x fa-stack-ma"></i>
                            <i class="fa fa-envelope fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="/contacts">
                            <i class="fas fa-circle fa-stack-2x fa-stack-ph"></i>
                            <i class="fa fa-phone fa-stack-1x"></i>
                        </a>
                    </span>
                </div> <!-- end of social-container -->
            </div> <!-- end of container -->
        </div> <!-- end of footer -->
        <!-- end of footer -->


        <!-- Copyright -->
        <div class="copyright">
            <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-3">
                <ul class="mb-4 list-unstyled p-small">
                    <li class="mb-2"><a href="article.html">Article Details</a></li>
                    <li class="mb-2"><a href="terms.html">Terms & Conditions</a></li>
                    <li class="mb-2"><a href="privacy.html">Privacy Policy</a></li>
                </ul>
                <p class="pb-2 p-small statement">Copyright © <a href="#your-link" class="no-underline">Drone TTC</a></p>

                <p class="pb-2 p-small statement">Distributed by : <a href="https://themewagon.com/" class="no-underline">บริษัท ไอดีไดรฟ์ จำกัด</a></p>
            </div>

        <!-- end of container -->
        </div> <!-- end of copyright -->
        <!-- end of copyright -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        {{-- Load Other Dependencies After jQuery --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
        {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script> --}}

        {{-- aos animations --}}
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>
    </body>
</html>
