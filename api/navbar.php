<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webpool Soft Services</title>


    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./assets/fontawesome-free-6.6.0-web/css/all.min.css">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox/dist/jquery.fancybox.min.css" />

    <!-- AOS (Animate On Scroll) CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="./assets/OwlCarousel2-2.3.4/docs_src/assets/css/animate.css">
    <!-- <link rel="stylesheet" href="./assets/OwlCarousel2-2.3.4/docs/assets/css/docs.theme.min.css"> -->

    <!-- WOW.js CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/wow.js/1.1.2/wow.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./include/style.css">
    <script src="./include/script.js" defer></script>
    <style>
        .kzn-tp-bgimg.defaultimg {
            background-repeat: no-repeat;
            background-image: url('./assets/img/background_image.jpg');
            background-size: cover;
            background-position: center center;
            width: 100%;
            height: 100%;
            opacity: 1;
            visibility: inherit;
            z-index: 20;
        }

        .dropdown:hover .dropdown-menu {
            display: flex;
            display: inline-flex;
            align-items: center;
            /* Align icon and text */
            transition: color 0.3s ease;
            /* Optional: smooth transition for color */

        }

        .dropdown:hover .dropdown-menu.service {
            display: inline-flex;
            align-items: center;
            /* Align icon and text */
            transition: color 0.3s ease;
            /* Optional: smooth transition for color */

            display: block;
        }

        .dropdown-title {
            font-weight: bold;
            padding: 10px 15px;
            background-color: none;
            font-size: 18px;
            text-transform: uppercase;
            display: ruby;
        }

        .dropdown-title .submenu_list {
            text-align: center;

            display: block;

        }

        .rotate-icon {
            display: inline-block;
            /* Ensure the icon is treated as a block for rotation */
            transition: transform 0.3s ease;
            /* Smooth rotation */
            margin-left: 5px;
            font-weight: bold;
        }

        .dropdown-item:hover .rotate-icons {
            transform: rotate(-90deg);
            /* Rotate icon 90 degrees on hover */
        }


        .nav-link:hover .rotate-icon {
            transform: rotate(90deg);
            /* Rotate icon 90 degrees on hover */
        }

        .dropdown-menu.sub.sp {
            top: 0;
            /* Align with the top of the parent dropdown */
            left: 100%;
            /* Position the submenu to the right of the parent dropdown */
            margin-left: 10px;

            display: none;

        }

        .dropdowns:hover .dropdown-menu.sub.sp {
            display: block;
        }
    </style>
</head>

<body>
   

   
<nav class="navbar navbar-expand-lg navbar-custom fixed-top primary-navigation"
     role="navigation" aria-label="Main navigation">

    <div class="container nav-main">

        <a class="navbar-brand" href="./index.php">
            <img src="./assets/img/logos.png" alt="Company logo">
        </a>

        <button class="navbar-toggler"
                type="button"
                id="navbarbutton"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link active"
                       aria-current="page"
                       href="./index.php">Home</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link "
                       aria-current="page"
                       href="./generateqr.php">Generate QR</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./about.html">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./contact-us.html">Contact</a>
                </li>

            </ul>
        </div>

    </div>
</nav>