<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elearning</title>


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
            background-image: url('assets/img/background_image.jpg');
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
    <nav class="navbar-top navbar-expand-lg fixed-top text-light pt-2">

        <div class="container">
            <div class="row w-100  d-flex">
                <div class=" sptop col-4 col-sm-4 col-lg-6 col-md-6 d-flex  align-items-center justify-content-between">
                    <!-- Dropdown for branches on small devices -->
                    <div class="d-lg-none d-md-none text-center  mobview">
                        <div class="dropdown">
                            <a class=" top-sm dropdown-toggle" type="button" id="branchesDropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Branches
                            </a>

                            <div class="dropdown-menu" aria-labelledby="branchesDropdown">
                                <a class="dropdown-item" href="./index.html">Pune</a>
                                <a class="dropdown-item" href="./index.html">Mumbai</a>
                                <a class="dropdown-item" href="./index.html">Thane</a>
                            </div>
                        </div>
                    </div>

                    <!-- Horizontal list for larger devices -->
                    <ul class="navbar-list-top d-flex flex-wrap d-none  d-md-flex d-lg-flex  ">
                        <li class="nav-item-top">
                            <a class="nav-links px-3  px-md-1" aria-current="page">Branches:</a>
                        </li>
                        <li class="nav-item-top">
                            <a class="nav-links px-3  px-md-1" aria-current="page" href="./index.html">Pune</a>
                        </li>
                        <li class="nav-item-top">
                            <a class="nav-links px-3  px-md-1" aria-current="page" href="./index.html">Mumbai</a>
                        </li>
                        <li class="nav-item-top">
                            <a class="nav-links px-3  px-md-1" aria-current="page" href="./index.html">Thane</a>
                        </li>
                    </ul>

                    <!-- Additional Dropdowns -->

                </div>
                <div
                    class="col-lg-6  col-4  col-sm-8 col-md-6 text-end d-lg-flex  d-md-flex align-items-center justify-content-end tops text-light  px-1">
                    <p class="p-top sp ">abc192@gmail.com | +91 1234567890</p>
                    <span class="dropdown mt-2 topbat  d-lg-none d-md-none ">


                        <a class="top-sm  px-2 ">
                            Call
                        </a>|
                        <a class=" top-sm px-2">
                            Services
                        </a>
                    </span>

                </div>

            </div>
        </div>
    </nav>

    <nav role="navigation" class="navbar navbar-expand-lg navbar-custom fixed-top primary-navigation ">
        <div class="container nav-main">
            <a class="navbar-brand" href="#">
                <img src="./assets/img/logo-corp-red.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" id="navbarbutton" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="./index.html">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="./index.html">DEMOS <i
                                class="fa-solid rotate-icon fa-chevron-right"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="./product.html" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            PRODUCT <i class="fa-solid rotate-icon fa-chevron-right"></i>
                        </a>
                        <div class="dropdown-menu  " id="dropdown-menu " aria-labelledby="dropdownMenuButton">


                            <ul class="submenu_list text-center">
                                <li class="dropdown-title">full stack developer</li>
                                <li><a class="dropdown-item" href="./chatbot.html">c++</a></li>
                                <!-- <li><hr class="dropdown-divider"></li> -->
                                <li><a class="dropdown-item" href="./kiosk.html">java</a></li>
                                <li><a class="dropdown-item" href="./e_learning.html">php</a></li>
                            </ul>

                            <ul>
                                <li class="dropdown-title  text-center">Testing</li>
                                <li><a class="dropdown-item" href="./kiosk.html">Python</a></li>
                                <li><a class="dropdown-item" href="./e_learning.html">React</a></li>
                                <li><a class="dropdown-item" href="./ai_solution.html">Angular</a></li>
                                <li><a class="dropdown-item" href="./billing.html">Php</a></li>
                            </ul>
                            <ul>
                                <li class="dropdown-title text-center">Marketing</li>
                                <li><a class="dropdown-item" href="./kiosk.html">Python</a></li>
                                <li><a class="dropdown-item" href="./e_learning.html">React</a></li>
                                <li><a class="dropdown-item" href="./ai_solution.html">Angular</a></li>
                                <li><a class="dropdown-item" href="./billing.html">Php</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="./service.html" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            COURCES<i class="fa-solid rotate-icon fa-chevron-right"></i>
                        </a>
                        <ul class="dropdown-menu submenu_list  service" aria-labelledby="dropdownMenuButton">

                            <li class="dropdowns"><a class="dropdown-item  "
                                    href="./services/development.html">DEVELOPMENT <i
                                        class="fa-solid rotate-icons fa-chevron-down"></i></a>

                                <ul class="dropdown-menu sub sp ">
                                    <li><a class="dropdown-item" href="./services/java.html">Java</a></li>
                                    <!-- <li><hr class="dropdown-divider"></li> -->
                                    <li><a class="dropdown-item" href="./services/python.html">Python</a></li>
                                    <li><a class="dropdown-item" href="./services/react.html">React</a></li>
                                    <li><a class="dropdown-item" href="./services/c.html">C Language</a></li>
                                    <li><a class="dropdown-item" href="./services/php.html">Php</a></li>
                                </ul>





                            </li>
                            <li><a class="dropdown-item" href="./services/testing.html">TESTING</a>


                            </li>
                            <!-- <li><hr class="dropdown-divider"></li> -->
                            <li><a class="dropdown-item" href="./services/marketing.html">MARKETING</a></li>
                            <li><a class="dropdown-item" href="./services/computer.html">COMPUTER</a></li>
                            <li><a class="dropdown-item" href="./services/business_studies.html">BUSINESS STUDIES</a>
                            </li>


                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./about.html">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact-us.html">CONTACT</a>
                        <!-- </li>   <li class="nav-item">
                        <a class="nav-link" href="#">Ecommerce</a>
                    </li>   <li class="nav-item">
                        <a class="nav-link" href="#">Ecommerce</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- Section first start -->
    <div class="kzn-rev_slider_wrapper fullwidthbanner-container">
        <div id="kzn-rev-slider1"
            class="kzn-rev_slider fullwidthabanner revslider-initialised kzn-rev_redraw_on_blurfocus"
            data-version="5.4.8" style="margin-top: 0px; margin-bottom: 0px; height: 700px;"
            data-slideactive="rs-245443">
            <div class="row">
                <div class="slotholder">
                    <div class="kzn-tp-bgimg defaultimg " data-bgcolor="undefined" src="assets/img/web3.jpg"></div>
                </div>

                <div class="kzn-tp-parallax-wrap w-100 container ">
                    <div class="kzn-tp-loop-wrap">
                        <div class="kzn-tp-mask-wrap">
                            <div class="kzn-tp-caption kzn-tp-resizeme font-Poppins font-weight-700  color-fff letter-spaceing-001 not-hover"
                                data-x="['center','center','center','center']" data-hoffset="['10','10','0','0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-167','-167','-72','-72']" data-fontsize="['80','80','60','40']"
                                data-lineheight="['100','100','80','60']" data-width="full" data-height="none"
                                data-whitespace="normal" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="1000"
                                data-splitin="none" data-splitout="none"
                                data-textalign="['center','center','center','center']" data-responsive_offset="on"
                                id="layer-323948768">
                                Learning Courses Online</div>
                        </div>
                    </div>
                </div>
                <div class="kzn-tp-parallax-wrap w-100 ps container">
                    <div class="kzn-tp-loop-wrap">
                        <div class="kzn-tp-mask-wrap">
                            <div class="kzn-tp-caption kzn-tp-resizeme font-Poppins font-weight-400 bottom  color-fff letter-spaceing-001 not-hover"
                                data-x="['center','center','center','center']" data-hoffset="['10','10','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-36','-36','14','14']"
                                data-fontsize="['20','20','18','15']" data-lineheight="['35','35','30','30']"
                                data-width="full" data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;" data-start="1500"
                                data-splitin="none" data-splitout="none"
                                data-textalign="['center','center','center','center']" data-responsive_offset="on"
                                id="layer-451987120">
                                Find your course and start learning.</div>
                        </div>
                    </div>
                </div>

                <div class="kzn-tp-parallax-wrap bottom mt-3 ">



                    <div class=" container vtop ">
                        <div class="row  d-flex v-top">

                            <div class="  col-lg-4  col-sm-text-center col-6 col-md-4 col-sm-4  elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-26a5f79"
                                data-id="26a5f79" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-dfe6d05 iconbox-text-left elementor-widget elementor-widget-thim-icon-box"
                                        data-id="dfe6d05" data-element_type="widget"
                                        data-widget_type="thim-icon-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="thim-widget-icon-box">
                                                <div class="wrapper-box-icon text-left overlay">
                                                    <div class="smicon-box iconbox-left">
                                                        <div class="boxes-icon">
                                                            <span class="inner-icon" data-aos="zoom-in-down">
                                                                <span class="icon">
                                                                    <i class="fas fa-home"></i>
                                                                    <!-- <img src="assets/img/icon-5.png" alt=""></span> -->
                                                        </div>
                                                        <div class="content-inner">
                                                            <div class="sc-heading">
                                                                <h3 class="heading__primary text-white">Best
                                                                    Industry
                                                                    Leaders</h3>
                                                            </div><a class="smicon-read sc-btn"
                                                                href="https://eduma.thimpress.com/demo-main/about-us/">View
                                                                More <i class="fa fa-chevron-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-4  col-6 col-md-4 col-sm-4  elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-26a5f79"
                                data-id="26a5f79" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-dfe6d05 iconbox-text-left elementor-widget elementor-widget-thim-icon-box"
                                        data-id="dfe6d05" data-element_type="widget"
                                        data-widget_type="thim-icon-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="thim-widget-icon-box">
                                                <div class="wrapper-box-icon text-left overlay">
                                                    <div class="smicon-box iconbox-left">
                                                        <div class="boxes-icon">
                                                            <span class="inner-icon" data-aos="zoom-in-down">
                                                                <span class="icon">
                                                                    <i class="fas fa-home"></i>
                                                                    <!-- <img src="assets/img/icon-5.png" alt=""></span> -->
                                                        </div>
                                                        <div class="content-inner">
                                                            <div class="sc-heading">
                                                                <h3 class="heading__primary text-white">Best
                                                                    Industry
                                                                    Leaders</h3>
                                                            </div><a class="smicon-read sc-btn"
                                                                href="https://eduma.thimpress.com/demo-main/about-us/">View
                                                                More <i class="fa fa-chevron-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-4  col-6 col-md-4 col-sm-4  elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-26a5f79"
                                data-id="26a5f79" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-dfe6d05 iconbox-text-left elementor-widget elementor-widget-thim-icon-box"
                                        data-id="dfe6d05" data-element_type="widget"
                                        data-widget_type="thim-icon-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="thim-widget-icon-box">
                                                <div class="wrapper-box-icon text-left overlay">
                                                    <div class="smicon-box iconbox-left">
                                                        <div class="boxes-icon">
                                                            <span class="inner-icon" data-aos="zoom-in-down">
                                                                <span class="icon">
                                                                    <i class="fas fa-home"></i>
                                                                    <!-- <img src="assets/img/icon-5.png" alt=""></span> -->
                                                        </div>
                                                        <div class="content-inner">
                                                            <div class="sc-heading">
                                                                <h3 class="heading__primary text-white">Best
                                                                    Industry
                                                                    Leaders</h3>
                                                            </div><a class="smicon-read sc-btn"
                                                                href="https://eduma.thimpress.com/demo-main/about-us/">View
                                                                More <i class="fa fa-chevron-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row vtop">
                        <div class=" container d-flex d-lg-none d-sm-none d-md-none mx-2 d-flex">


                            <div class="  col-lg-4 col-6 col-md-4 col-sm-4  elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-26a5f79"
                                data-id="26a5f79" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-dfe6d05 iconbox-text-left elementor-widget elementor-widget-thim-icon-box"
                                        data-id="dfe6d05" data-element_type="widget"
                                        data-widget_type="thim-icon-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="thim-widget-icon-box">
                                                <div class="wrapper-box-icon text-left overlay">
                                                    <div class="smicon-box iconbox-left">
                                                        <div class="boxes-icon">
                                                            <span class="inner-icon" data-aos="zoom-in-down">
                                                                <span class="icon">
                                                                    <i class="fas fa-home"></i>
                                                                    <!-- <img src="assets/img/icon-5.png" alt=""></span> -->
                                                        </div>
                                                        <div class="content-inner">
                                                            <div class="sc-heading">
                                                                <h3 class="heading__primary text-white">Best
                                                                    Industry
                                                                    Leaders</h3>
                                                            </div><a class="smicon-read sc-btn"
                                                                href="https://eduma.thimpress.com/demo-main/about-us/">View
                                                                More <i class="fa fa-chevron-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-4  col-6 col-md-4 col-sm-4  elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-26a5f79"
                                data-id="26a5f79" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-dfe6d05 iconbox-text-left elementor-widget elementor-widget-thim-icon-box"
                                        data-id="dfe6d05" data-element_type="widget"
                                        data-widget_type="thim-icon-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="thim-widget-icon-box">
                                                <div class="wrapper-box-icon text-left overlay">
                                                    <div class="smicon-box iconbox-left">
                                                        <div class="boxes-icon">
                                                            <span class="inner-icon" data-aos="zoom-in-down">
                                                                <span class="icon">
                                                                    <i class="fas fa-home"></i>
                                                                    <!-- <img src="assets/img/icon-5.png" alt=""></span> -->
                                                        </div>
                                                        <div class="content-inner">
                                                            <div class="sc-heading">
                                                                <h3 class="heading__primary text-white">Best
                                                                    Industry
                                                                    Leaders</h3>
                                                            </div><a class="smicon-read sc-btn"
                                                                href="https://eduma.thimpress.com/demo-main/about-us/">View
                                                                More <i class="fa fa-chevron-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="container text-center last d-flex d-lg-none d-sm-none d-md-none">
                            <div class="  col-lg-4  col-6 col-md-4 col-sm-4  elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-26a5f79"
                                data-id="26a5f79" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-dfe6d05 iconbox-text-left elementor-widget elementor-widget-thim-icon-box"
                                        data-id="dfe6d05" data-element_type="widget"
                                        data-widget_type="thim-icon-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="thim-widget-icon-box">
                                                <div class="wrapper-box-icon text-left overlay">
                                                    <div class="smicon-box iconbox-left">
                                                        <div class="boxes-icon">
                                                            <span class="inner-icon" data-aos="zoom-in-down">
                                                                <span class="icon">
                                                                    <i class="fas fa-home"></i>
                                                                    <!-- <img src="assets/img/icon-5.png" alt=""></span> -->
                                                        </div>
                                                        <div class="content-inner">
                                                            <div class="sc-heading">
                                                                <h3 class="heading__primary text-white">Best
                                                                    Industry
                                                                    Leaders</h3>
                                                            </div><a class="smicon-read sc-btn"
                                                                href="https://eduma.thimpress.com/demo-main/about-us/">View
                                                                More <i class="fa fa-chevron-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Section second start -->



    <!-- section fourth start --------------------------------------------->



    <section class="section_third price text-center">
        <div class="container team-sektion paddingTB60">
            <div class="row">
                <div class="site-heading text-center text-white" data-aos="zoom-in-down">
                    <!-- <h2 class="mb0 bold fs-1 pt-5"> Course​ </h2> -->
                    <h1 class="title h1 ">Popular <span>Course​ </span></h1>
                    <p>Limitless learning, more possibilities

                        <br> ut labore et dolore magna aliqua. Ut enim ad minim
                    </p>
                    <div class="border"></div>
                </div>
            </div>


            <div class=" row justify-content-center">
                <!-- Bronze Plan -->
                <div class="col-md-3 col-lg-3 col-sm-6 col-12 mb-4">
                    <div class="team-box  py-3  text-left">
                        <div class="team-img thumbnail card  price">
                            <div class="price-box ">
                                <div class="card-head">
                                    <img src="assets/img/two-entrepreneurs-.avif" class="img-fluid mb-3 w-100"
                                        alt="Bronze Plan">
                                    <h3 class="course-heading">Master Deploma in Full Stack Java and froend end</h3>
                                </div>
                                <hr class="hr line">
                                <div class="details corp">
                                    <h5 class="duration course">Duration: <small>5 months </small> </h5>
                                    <span class="sp course  duration course text-left">
                                        <i class="fa-regular fa-clock"></i> <small> 748 hours</small></span>
                                    <p class="course desc">Own your future learning new skills online ut labore et
                                        dolore magna aliqua.</p>


                                </div>
                                <a href="javascript:;" class="btn btn-main bg-btn lnk animated pulse-button-bounce"
                                    onclick="order_now_value(this)">Start Learning <i
                                        class="fa-solid fa-caret-right"></i> <span class="circle"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-12 mb-4">
                    <div class="team-box py-3 text-left">
                        <div class="team-img thumbnail card  price">
                            <div class="price-box ">
                                <div class="card-head">
                                    <img src="assets/img/web_application.jpeg" class="img-fluid mb-3 w-100"
                                        alt="Bronze Plan">
                                    <h3 class="course-heading">Instructional Design for Learning and Development</h3>
                                </div>
                                <hr class="hr line">
                                <div class="details corp">
                                    <h5 class="duration course">Duration: <small>5 months </small> </h5>
                                    <span class="sp course  duration course text-left">
                                        <i class="fa-regular fa-clock"></i> <small> 748 hours</small></span>
                                    <p class="course desc">Own your future learning new skills online ut labore et
                                        dolore magna aliqua.</p>


                                </div>
                                <a href="javascript:;" class="btn btn-main bg-btn lnk animated pulse-button-bounce"
                                    onclick="order_now_value(this)">Start Learning <i
                                        class="fa-solid fa-caret-right"></i> <span class="circle"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-12 mb-4">
                    <div class="team-box  py-3  text-left">
                        <div class="team-img thumbnail card  price">
                            <div class="price-box ">
                                <div class="card-head">
                                    <img src="assets/img/designers-discussing-new-ideas_274689-25557.avif"
                                        class="img-fluid mb-3 w-100" alt="Bronze Plan">
                                    <h3 class="course-heading">How to Teach English Online and Get Paid</h3>
                                </div>
                                <hr class="hr line">
                                <div class="details corp">
                                    <h5 class="duration course">Duration: <small>5 months </small> </h5>
                                    <span class="sp course  duration course text-left">
                                        <i class="fa-regular fa-clock"></i> <small> 748 hours</small></span>
                                    <p class="course desc">Own your future learning new skills online ut labore et
                                        dolore magna aliqua.</p>


                                </div>
                                <a href="javascript:;" class="btn btn-main bg-btn lnk animated pulse-button-bounce"
                                    onclick="order_now_value(this)">Start Learning <i
                                        class="fa-solid fa-caret-right"></i> <span class="circle"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-12 mb-4">
                    <div class="team-box  py-3 text-left">
                        <div class="team-img thumbnail card  price">
                            <div class="price-box ">
                                <div class="card-head">
                                    <img src="assets/img/digital_marketing.jpeg" class="img-fluid mb-3 w-100"
                                        alt="Bronze Plan">
                                    <h3 class="course-heading">Accelerate Your Course Creation Speed</h3>
                                </div>
                                <hr class="hr line">
                                <div class="details corp">
                                    <h5 class="duration course">Duration: <small>5 months </small> </h5>
                                    <span class="sp course  duration course text-left">
                                        <i class="fa-regular fa-clock"></i> <small> 748 hours</small></span>
                                    <p class="course desc">Own your future learning new skills online ut labore et
                                        dolore magna aliqua.</p>


                                </div>
                                <a href="javascript:;" class="btn btn-main bg-btn lnk animated pulse-button-bounce"
                                    onclick="order_now_value(this)">Start Learning <i
                                        class="fa-solid fa-caret-right"></i> <span class="circle"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        </div>
    </section>

    <!-- fifth section start --------------------------------------------------------------->

    <section>
        <div class="container">
       
            <h1 class="title h1 ">   <sup> <sup>_________________</sup></sup>Categories <span>Outstanding </span> <sub>_____________</sub></h1>
            <div class="col-sm-12">
                <div class="tab-content" id="main-tab-content">
                    <!-- Website Tab Content -->
                    <div role="tabpanel" class="tab-pane1 fade show active" id="website-tab">
                        <div class="col-sm-12">
                            <div class="port-tab port-tb-3">


                                <div class="tab-content" id="webtabcontents">
                                    <div role="tabpanel" class="tab-pane fade show active" id="website-business">
                                        <div
                                            class="col-12 d-flex flex-column flex-md-row align-items-center  pb-md-3 mb-md-2 ">
                                            <div class="col-sm-4 col-12 port-col-6-st pb-5 px-md-3 wow fadeInUp aos-init aos-animate course"
                                                data-aos="fade-up"
                                                style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1); will-change: transform;">


                                                <div class="port-img-small box18 isotope_item hover-scale card ">
                                                    <div class="item-image position-relative">
                                                        <img loading="lazy" class="img-fluid w-100 course-photo "
                                                            alt="portfolio"
                                                            src="assets/img/designers-discussing-new-ideas_274689-25557.avif">

                                                        <!-- Text overlay -->
                                                        <div class="overlay-text position-absolute text-center">
                                                            <h3 class="h3 main heading text-white">Coaching</h3>
                                                            <span class="courese-span text-white">12 Courses</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-12 port-col-6-st pb-5 px-md-3 wow fadeInUp aos-init aos-animate course"
                                                data-aos="fade-up"
                                                style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1); will-change: transform;">
                                                <!-- <div class="port-img-small box18 isotope_item hover-scale card ">
                                                    <div class="item-image ">

                                                        <img loading="lazy" class="img-fluid w-100 course-photo "
                                                            alt="portfolio" src="assets/img/two-entrepreneurs-working-office-analyzing-business-plans-computer-focus-is-man_637285-1071.avif">


                                                    </div>
                                                    <div class="item-image card-body text-center">
                                                        <h3 class="h3  main heading">Coaching</h3>
                                                        <span class="courese-span">12 Courses</span>
                                                    </div>
                                                </div> -->
                                                <div class="port-img-small box18 isotope_item hover-scale card ">
                                                    <div class="item-image position-relative">
                                                        <img loading="lazy" class="img-fluid w-100 course-photo "
                                                            alt="portfolio"
                                                            src="assets/img/two-entrepreneurs-working-office-analyzing-business-plans-computer-focus-is-man_637285-1071.avif">

                                                        <!-- Text overlay -->
                                                        <div class="overlay-text position-absolute text-center">
                                                            <h3 class="h3 main heading text-white">Coaching</h3>
                                                            <span class="courese-span text-white">12 Courses</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-12 port-col-6-st pb-5 px-md-3 wow fadeInUp aos-init aos-animate course"
                                                data-aos="fade-up"
                                                style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1); will-change: transform;">

                                                <div class="port-img-small box18 isotope_item hover-scale card ">
                                                    <div class="item-image position-relative">
                                                        <img loading="lazy" class="img-fluid w-100 course-photo "
                                                            alt="portfolio"
                                                            src="assets/img/happy-indian-business-woman-professional-presenter-giving-presentation-corporate-group-meeting-office-busy-diverse-team-business-people-working-corporate-strategy-conference-training_1254992-212397.avif">


                                                        <!-- Text overlay -->
                                                        <div class="overlay-text position-absolute text-center">
                                                            <h3 class="h3 main heading text-white">Coaching</h3>
                                                            <span class="courese-span text-white">12 Courses</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-12 d-flex flex-column flex-md-row align-items-center  pb-md-3 mb-md-2 ">
                                            <div class="col-sm-4 col-12 port-col-6-st pb-5 px-md-3 wow fadeInUp aos-init aos-animate course"
                                                data-aos="fade-up"
                                                style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1); will-change: transform;">

                                                <div class="port-img-small box18 isotope_item hover-scale card ">
                                                    <div class="item-image position-relative">

                                                        <img loading="lazy" class="img-fluid w-100 course-photo "
                                                            alt="portfolio" src="assets/img/1.avif">

                                                        <!-- Text overlay -->
                                                        <div class="overlay-text position-absolute text-center">
                                                            <h3 class="h3 main heading text-white">Coaching</h3>
                                                            <span class="courese-span text-white">12 Courses</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-12 port-col-6-st pb-5 px-md-3 wow fadeInUp aos-init aos-animate course"
                                                data-aos="fade-up"
                                                style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1); will-change: transform;">

                                                <div class="port-img-small box18 isotope_item hover-scale card ">
                                                    <div class="item-image position-relative">
                                                        <img loading="lazy" class="img-fluid w-100 course-photo "
                                                            alt="portfolio"
                                                            src="assets/img/programming-background-with-person-working-with-codes-computer_23-2150010136.avif">



                                                        <div class="overlay-text position-absolute text-center">
                                                            <h3 class="h3 main heading text-white">Coaching</h3>
                                                            <span class="courese-span text-white">12 Courses</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-12 port-col-6-st pb-5 px-md-3 wow fadeInUp aos-init aos-animate course"
                                                data-aos="fade-up"
                                                style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1); will-change: transform;">
                                                <!-- <div class="port-img-small box18 isotope_item hover-scale card ">
                                                    <div class="item-image ">

                                                        <img loading="lazy" class="img-fluid w-100 course-photo "
                                                            alt="portfolio" src="assets/img/colleagues-while-working-process_140725-7676.avif">


                                                    </div>
                                                    <div class="item-image card-body text-center">
                                                        <h3 class="h3  main heading">Coaching</h3>
                                                        <span class="courese-span">12 Courses</span>
                                                    </div>
                                                </div> -->
                                                <div class="port-img-small box18 isotope_item hover-scale card ">
                                                    <div class="item-image position-relative">
                                                        <img loading="lazy" class="img-fluid w-100 course-photo "
                                                            alt="portfolio"
                                                            src="assets/img/colleagues-while-working-process_140725-7676.avif">


                                                        <!-- Text overlay -->
                                                        <div class="overlay-text position-absolute text-center">
                                                            <h3 class="h3 main heading text-white">Coaching</h3>
                                                            <span class="courese-span text-white">12 Courses</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-12 d-flex flex-column flex-md-row align-items-center  pb-md-3 mb-md-2 ">
                                            <div class="col-sm-4 col-12 port-col-6-st pb-5 px-md-3 wow fadeInUp aos-init aos-animate course"
                                                data-aos="fade-up"
                                                style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1); will-change: transform;">

                                                <div class="port-img-small box18 isotope_item hover-scale card ">
                                                    <div class="item-image position-relative">
                                                        <img loading="lazy" class="img-fluid w-100 course-photo "
                                                            alt="portfolio"
                                                            src="assets/img/education-programming-young-man-work-laptop-online-learning-internet-course_39422-1024.avif">

                                                        <!-- Text overlay -->
                                                        <div class="overlay-text position-absolute text-center">
                                                            <h3 class="h3 main heading text-white">Coaching</h3>
                                                            <span class="courese-span text-white">12 Courses</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-12 port-col-6-st pb-5 px-md-3 wow fadeInUp aos-init aos-animate course"
                                                data-aos="fade-up"
                                                style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1); will-change: transform;">

                                                <div class="port-img-small box18 isotope_item hover-scale card ">
                                                    <div class="item-image position-relative">
                                                        <img loading="lazy" class="img-fluid w-100 course-photo "
                                                            alt="portfolio"
                                                            src="assets/img/clean-vector-illustration-team-presenting-design-blog-interesting-composition_941097-97455.avif">


                                                        <!-- Text overlay -->
                                                        <div class="overlay-text position-absolute text-center">
                                                            <h3 class="h3 main heading text-white">Coaching</h3>
                                                            <span class="courese-span text-white">12 Courses</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <style>

                                            </style>

                                            <!-- <div class="course-item">
    <div class="course-thumbnail">
    <a href="https://eduma.thimpress.com/demo-main/course/how-to-teach-an-online-course/">
    <img loading="lazy" decoding="async" src="https://eduma.thimpress.com/demo-main/wp-content/uploads/sites/95/2022/10/eduma-learnpress-lms-400x300.jpg" alt="How To Teach An Online Course" title="eduma-learnpress-lms" width="400" height="300"> </a>
    <a class="course-readmore" href="https://eduma.thimpress.com/demo-main/course/how-to-teach-an-online-course/">Read More</a>
    </div>
    <div class="thim-course-content">
    <div class="course-author" itemscope="" itemtype="http://schema.org/Person">
    <a href="https://eduma.thimpress.com/demo-main/instructor-4/keny/"><img loading="lazy" decoding="async" alt="User Avatar" class="avatar" src="https://eduma.thimpress.com/demo-main/wp-content/uploads/learn-press-profile/7/e5c6a6fb8aa3864eacaec471611e0470.jpeg" height="50" width="50"></a> <div class="author-contain">
    <div class="value" itemprop="name">
    <a href="https://eduma.thimpress.com/demo-main/instructor-4/keny/">Keny White</a> </div>
    </div>
    </div>
    <h2 class="course-title"><a href="https://eduma.thimpress.com/demo-main/course/how-to-teach-an-online-course/" rel="bookmark">How To Teach An Online Course</a></h2><div class="course-meta">
    <div class="course-author" itemscope="" itemtype="http://schema.org/Person">
    <a href="https://eduma.thimpress.com/demo-main/instructor-4/keny/"><img loading="lazy" decoding="async" alt="User Avatar" class="avatar" src="https://eduma.thimpress.com/demo-main/wp-content/uploads/learn-press-profile/7/e5c6a6fb8aa3864eacaec471611e0470.jpeg" height="50" width="50"></a> <div class="author-contain">
    <div class="value" itemprop="name">
    <a href="https://eduma.thimpress.com/demo-main/instructor-4/keny/">Keny White</a> </div>
    </div>
    </div>
    <div class="course-lesson"><div class="value"><i aria-hidden="true" class="tk tk-file-invoice"></i>0</div></div>
    <div class="course-students">
    <label>Students</label>
    <div class="value"><i class="tk tk-students"></i>
    28 </div>
    <span>students</span>
    </div>
    <div class="course-price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
    <div class="value  has-origin" itemprop="price">
    <span class="course-origin-price">$69.00</span>
    $55.00 </div>
    <meta itemprop="priceCurrency" content="USD">
    </div>
    </div> </div>
    </div> -->

                                            <style>


                                            </style>
                                            <div class="col-sm-4 col-12 port-col-6-st pb-5 px-md-3 wow fadeInUp aos-init aos-animate course"
                                                data-aos="fade-up"
                                                style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1); will-change: transform;">
                                                <div class="port-img-small box18 isotope_item hover-scale card ">
                                                    <div class="item-image sp position-relative">
                                                        <img loading="lazy" class="img-fluid w-100 course-photo"
                                                            alt="portfolio"
                                                            src="assets/img/network-connection-background_776894-38521.avif">

                                                        <!-- Text overlay -->
                                                        <div class="overlay-text position-absolute text-center">
                                                            <h3 class="h3 main heading text-white">Coaching</h3>
                                                            <span class="courese-span text-white">12 Courses</span>
                                                        </div>
                                                        <a class="course-readmore"
                                                            href="https://eduma.thimpress.com/demo-main/course/how-to-teach-an-online-course/">Read
                                                            More</a>
                                                        <a class="popup-button position-absolute"
                                                            href="https://eduma.thimpress.com/demo-main/course/how-to-teach-an-online-course/">
                                                            Read More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Your content for Business tab -->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <!-- sixth section start --------------------------------------------------------------->
    <style>
        .swiper-slide,
        .swiper-ios .swiper-slide,
        .swiper-wrapper {
            transform: translate3d(-65px, 0, 0);

        }
    </style>
    <!-- Swiper Container -->
    <section class="section_sixths swiper_section ">
        <div class="container">
            <h1 class="title h1 ">Release <span>New </span></h1>

            <style>
                .swiper-button-next:after,
                .swiper-button-prev:after {
                    font-family: swiper-icons;
                    font-size: 29px;
                    text-transform: none !important;
                    letter-spacing: 0;
                    font-variant: initial;
                    line-height: 1;
                    top: 1px;
                    margin-top: -688px;
                    background: blanchedalmond;
                    width: 47px;
                    padding-right: mar;
                    margin-right: 75px;
                    font-weight: 900;
                    height: 49px;
                    padding-left: 20px;
                    padding-top: 22px;
                    padding-bottom: 36px;
                    padding-right: 35px;
                    /* margin-top: 0px; */
                    border-radius: 5px;
                }

                .swiper-button-prev {
                    right: var(--swiper-navigation-sides-offset, 71px);
                    left: auto;
                    align-items: center;

                }

                .swiper.test {
                    width: 100%;
                    height: 718px;
                    padding: 50px 55px 63px 55px;
                    margin-right: 20px;
                }

                .swiper-slide {}

                .port-img-small.carousels {
                    height: auto;
                }

                .main.cource-heading {
                    font-size: 25px;
                }
            </style>

            <div class="swiper test   mx-5">
                <!-- Navigation buttons -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-wrapper px-3  py-3 mx-5 ps">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="col-sm-4 col-12 port-col-6-st pb-5 col-lg-4 col-md-4 wow fadeInUp"
                            data-aos="fade-up">
                            <div class="port-img-small carousels box18 isotope_item hover-scale card">
                                <div class="item-image">
                                    <img loading="lazy" class="img-fluid w-100 course-photo" alt="portfolio"
                                        src="assets/img/logo3.jpg">
                                </div>
                                <div class="item-image card-body text-left">
                                    <h3 class="h3 main cource-heading ">Introduction of LearnPress – LMS plugin</h3>
                                    <span class="courese-span">12 Courses</span>

                                    <!-- <p> <small>

LearnPress is a comprehensive WordPress LMS Plugin for WordPress. This is one of the best WordPress LMS Plugins which can be used to easily create & sell courses online
</small> </p> -->
                                    <br>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17"
                                        fill="none">
                                        <path
                                            d="M5.33333 6.49992H8M5.33333 9.16659H10.6667M5.33333 11.8333H10.6667M10.6663 1.83325V3.83325M5.33301 1.83325V3.83325M4.66667 2.83325H11.3333C12.8061 2.83325 14 4.02716 14 5.49992V12.4999C14 13.9727 12.8061 15.1666 11.3333 15.1666H4.66667C3.19391 15.1666 2 13.9727 2 12.4999V5.49992C2 4.02716 3.19391 2.83325 4.66667 2.83325Z"
                                            stroke="#444444" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>

                                    
                                    <small> 10 Lesson</small><br>
                                    <a href="javascript:;" class="btn btn-main bg-btn lnk w-100 mt-2 animated pulse-button-bounce"
                                        onclick="order_now_value(this)">Enroll Cource <i
                                            class="fa-solid fa-caret-right"></i> <span class="circle"></span></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col-sm-4 col-12 port-col-6-st pb-5 col-lg-4 col-md-4 wow fadeInUp"
                            data-aos="fade-up">
                            <div class="port-img-small box18 isotope_item hover-scale card">
                                <div class="item-image">
                                    <img loading="lazy" class="img-fluid w-100 course-photo" alt="portfolio"
                                        src="assets/img/logo3.jpg">
                                </div>
                                <div class="item-image card-body text-center">
                                    <h3 class="h3 main heading">Coaching</h3>
                                    <span class="courese-span">12 Courses</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col-sm-4 col-12 port-col-6-st pb-5 col-lg-4 col-md-4 wow fadeInUp"
                            data-aos="fade-up">
                            <div class="port-img-small box18 isotope_item hover-scale card">
                                <div class="item-image">
                                    <img loading="lazy" class="img-fluid w-100 course-photo" alt="portfolio"
                                        src="assets/img/logo3.jpg">
                                </div>
                                <div class="item-image card-body text-center">
                                    <h3 class="h3 main heading">Coaching</h3>
                                    <span class="courese-span">12 Courses</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col-sm-4 col-12 port-col-6-st pb-5 col-lg-4 col-md-4 wow fadeInUp"
                            data-aos="fade-up">
                            <div class="port-img-small box18 isotope_item hover-scale card">
                                <div class="item-image">
                                    <img loading="lazy" class="img-fluid w-100 course-photo" alt="portfolio"
                                        src="assets/img/logo3.jpg">
                                </div>
                                <div class="item-image card-body text-center">
                                    <h3 class="h3 main heading">Coaching</h3>
                                    <span class="courese-span">12 Courses</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="col-sm-4 col-12 port-col-6-st pb-5 col-lg-4 col-md-4 wow fadeInUp"
                            data-aos="fade-up">
                            <div class="port-img-small box18 isotope_item hover-scale card">
                                <div class="item-image">
                                    <img loading="lazy" class="img-fluid w-100 course-photo" alt="portfolio"
                                        src="assets/img/logo3.jpg">
                                </div>
                                <div class="item-image card-body text-center">
                                    <h3 class="h3 main heading">Coaching</h3>
                                    <span class="courese-span">12 Courses</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="col-sm-4 col-12 port-col-6-st pb-5 col-lg-4 col-md-4 wow fadeInUp"
                            data-aos="fade-up">
                            <div class="port-img-small box18 isotope_item hover-scale card">
                                <div class="item-image">
                                    <img loading="lazy" class="img-fluid w-100 course-photo" alt="portfolio"
                                        src="assets/img/logo3.jpg">
                                </div>
                                <div class="item-image card-body text-center">
                                    <h3 class="h3 main heading">Coaching</h3>
                                    <span class="courese-span">12 Courses</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="col-sm-4 col-12 port-col-6-st pb-5 col-lg-4 col-md-4 wow fadeInUp"
                            data-aos="fade-up">
                            <div class="port-img-small box18 isotope_item hover-scale card">
                                <div class="item-image">
                                    <img loading="lazy" class="img-fluid w-100 course-photo" alt="portfolio"
                                        src="assets/img/logo3.jpg">
                                </div>
                                <div class="item-image card-body text-center">
                                    <h3 class="h3 main heading">Coaching</h3>
                                    <span class="courese-span">12 Courses</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Repeat slides as needed -->
                </div>


                <!-- Pagination -->
                <div class="swiper-pagination"></div>


            </div>
        </div>
    </section>

    <!-- section sevent start ------------------------------------------------------------------- -->


    <section class=" section_seventh ">
        <div class="container pt-5">
            <!-- <h2 class="title h2 ">What to expect from <span>a Kaizen SoftServices? </span></h2> -->
            <h1 class="title h1 ">What to expect from <span>a Kaizen SoftServices?</span></h1>
            <div class="col-sm-12">
                <div class="tab-content" id="main-tab-content">
                    <!-- Website Tab Content -->
                    <div role="tabpanel" class="tab-pane1 fade show active" id="website-tab">
                        <div class="col-sm-12">
                            <div class="port-tab port-tb-3">


                                <div class="tab-content" id="webtabcontents">
                                    <div role="tabpanel" class="tab-pane fade show active" id="website-business">
                                        <div
                                            class="col-12 d-flex flex-column flex-md-row align-items-center  pb-md-3 mb-md-2 ">
                                            <div class="col-sm-4 col-12 port-col-6-st  pb-5 px-md-3 wow fadeInUp aos-init aos-animate course"
                                                data-aos="fade-up"
                                                style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1); will-change: transform;">
                                                <div
                                                    class="port-img-small text box18 isotope_item hover-scale text-center ">

                                                    <i class="fa-solid fa-check-circle sp"></i>
                                                    <div class="item-image card-body  sp text-center">
                                                        <h3 class="h3  main heading">Highly Experienced</h3>
                                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                                                            odit aut fugit, sed quia consequuntur</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-12 port-col-6-st pb-5 px-md-3 wow fadeInUp aos-init aos-animate course"
                                                data-aos="fade-up"
                                                style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1); will-change: transform;">
                                                <div
                                                    class="port-img-small text  box18 isotope_item hover-scale text-center ">

                                                    <i class="fa-solid fa-check-circle sp"></i>
                                                    <div class="item-image card-body  sp text-center">
                                                        <h3 class="h3  main heading">Question, Quiz & Course</h3>
                                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                                                            odit aut fugit, sed quia consequuntur</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-12 port-col-6-st pb-5 px-md-3 wow fadeInUp aos-init aos-animate course"
                                                data-aos="fade-up"
                                                style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1); will-change: transform;">
                                                <div
                                                    class="port-img-small text  box18 isotope_item hover-scale text-center ">

                                                    <i class="fa-solid fa-check-circle sp"></i>
                                                    <div class="item-image card-body  sp text-center">
                                                        <h3 class="h3  main heading">Dedicated Support</h3>
                                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                                                            odit aut fugit, sed quia consequuntur</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="col-12 d-flex flex-column flex-md-row align-items-center  pb-md-3 mb-md-2 ">
                                            <div class="col-sm-4 col-12 port-col-6-st pb-5 px-md-3 wow fadeInUp aos-init aos-animate course"
                                                data-aos="fade-up"
                                                style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1); will-change: transform;">
                                                <div
                                                    class="port-img-small text  box18 isotope_item hover-scale text-center ">

                                                    <i class="fa-solid fa-check-circle sp"></i>
                                                    <div class="item-image card-body  sp text-center">
                                                        <h3 class="h3  main heading">Highly Experienced</h3>
                                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                                                            odit aut fugit, sed quia consequuntur</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-12 port-col-6-st pb-5 px-md-3 wow fadeInUp aos-init aos-animate course"
                                                data-aos="fade-up"
                                                style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1); will-change: transform;">
                                                <div
                                                    class="port-img-small text  box18 isotope_item hover-scale text-center ">

                                                    <i class="fa-solid fa-check-circle sp"></i>
                                                    <div class="item-image card-body  sp text-center">
                                                        <h3 class="h3  main heading">Highly Experienced</h3>
                                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                                                            odit aut fugit, sed quia consequuntur</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-12 port-col-6-st pb-5 px-md-3 wow fadeInUp aos-init aos-animate course"
                                                data-aos="fade-up"
                                                style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1); will-change: transform;">
                                                <div
                                                    class="port-img-small  text box18 isotope_item hover-scale text-center ">

                                                    <i class="fa-solid fa-check-circle sp"></i>
                                                    <div class="item-image card-body  sp text-center">
                                                        <h3 class="h3  main heading">Highly Experienced</h3>
                                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                                                            odit aut fugit, sed quia consequuntur</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Your content for Business tab -->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>




    <section class="section-second ">

        <div class="row">

            <div class="container te pt-5  ">

                <div class="elementor-container elementor-column-gap-no">
                    <div class="thim-ekits-heading thim-ekit__heading">

                        <h1 class="title h1 ">Why <span>choose us </span></h1>
                        <p class="sub-heading sp text-center px-1">Eduma elevates education with Innovative Solutions,
                            Inspiring
                            Engagement, and Unleashing Learning Potential.</p>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .img-fluid.course-icon {
                transition: transform 1.1s ease;
                height: 72px;
                width: 85px;
                color: beige;




            }

            .course-icon {
                filter: grayscale(100%) brightness(0) sepia(1) hue-rotate(-30deg) saturate(1000%) brightness(1);
            }
        </style>
        <div class="kzn-section kzn-top-section kzn-section-stretched kzn-slide-up " data-id="1caae0bf"
            data-element_type="section"
            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;animation&quot;:&quot;kzn-slide-up&quot;,&quot;animation_delay&quot;:100}"
            style="width: 100%; left: 0;">
            <div class="container kzn-column-gap-default d-sm-flex d-lg-flex d-md-flex">
                <div class="kzn-column kzn-col-20 col-sm-4 kzn-top-column kzn-element  odd " data-id="4d283752"
                    data-element_type="column">
                    <div class="kzn-widget-wrap kzn-element-populated card ">
                        <section class="kzn-inner-section kzn-element" data-id="28415b14" data-element_type="section">
                            <div class="kzn-container kzn-column-gap-default">
                                <div class="kzn-column kzn-col-100 kzn-inner-column kzn-element">
                                    <div class="kzn-widget-wrap kzn-element-populated">
                                        <div class="kzn-widget kzn-icon">
                                            <div class="kzn-icon-wrapper">
                                                <div class="kzn-icon">
                                                    <!-- <i class="fa-solid fa-graduation-cap  img-fluid course-icon"></i>
                                                     -->



                                                    <img loading="lazy" class="img-fluid  course-icon" alt="portfolio"
                                                        src="assets/img/3307318.png">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="kzn-widget kzn-counter">


                                            <div class="kzn-counter-title">Students Placed</div>
                                            <div class="kzn-counter-number-wrapper counters">
                                                <span class="kzn-counter-number-prefix  "></span>
                                                <span class="kzn-counter-number counter" data-duration="1000"
                                                    data-to-value="12" data-from-value="0" data-target="450">400</span>

                                                <span class="kzn-counter-number">+</span>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="kzn-column kzn-col-20 col-sm-4 kzn-top-column kzn-element" data-id="6c4d411b"
                    data-element_type="column">
                    <div class="kzn-widget-wrap kzn-element-populated card">
                        <section class="kzn-inner-section kzn-element" data-id="28415b14" data-element_type="section">
                            <div class="kzn-container kzn-column-gap-default">
                                <div class="kzn-column kzn-col-100 kzn-inner-column kzn-element">
                                    <div class="kzn-widget-wrap kzn-element-populated">
                                        <div class="kzn-widget kzn-icon">
                                            <div class="kzn-icon-wrapper">
                                                <div class="kzn-icon">
                                                    <i class="fa-solid fa-graduation-cap"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kzn-widget kzn-counter">
                                            <div class="kzn-counter-title">Students Placed</div>
                                            <div class="kzn-counter-number-wrapper">
                                                <span class="kzn-counter-number-prefix  "></span>
                                                <span class="kzn-counter-number counter" data-duration="1000"
                                                    data-to-value="12" data-from-value="0" data-target="450">400</span>

                                                <span class="kzn-counter-number">+</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="kzn-column kzn-col-20 col-sm-4 kzn-top-column kzn-element  odd " data-id="4d520d3b"
                    data-element_type="column">
                    <div class="kzn-widget-wrap kzn-element-populated card">
                        <section class="kzn-inner-section kzn-element" data-id="28415b14" data-element_type="section">
                            <div class="kzn-container kzn-column-gap-default">
                                <div class="kzn-column kzn-col-100 kzn-inner-column kzn-element">
                                    <div class="kzn-widget-wrap kzn-element-populated">
                                        <div class="kzn-widget kzn-icon">
                                            <div class="kzn-icon-wrapper">
                                                <div class="kzn-icon">
                                                    <i class="fa-solid fa-graduation-cap"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kzn-widget kzn-counter">
                                            <div class="kzn-counter-title">Students Placed</div>
                                            <div class="kzn-counter-number-wrapper">
                                                <span class="kzn-counter-number-prefix  "></span>
                                                <span class="kzn-counter-number counter" data-duration="1000"
                                                    data-to-value="12" data-from-value="0" data-target="450">400</span>

                                                <span class="kzn-counter-number">+</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="kzn-column kzn-col-20  col-sm-4 kzn-top-column kzn-element" data-id="519e175b"
                    data-element_type="column">
                    <div class="kzn-widget-wrap kzn-element-populated card">
                        <section class="kzn-inner-section kzn-element" data-id="28415b14" data-element_type="section">
                            <div class="kzn-container kzn-column-gap-default">
                                <div class="kzn-column kzn-col-100 kzn-inner-column kzn-element">
                                    <div class="kzn-widget-wrap kzn-element-populated">
                                        <div class="kzn-widget kzn-icon">
                                            <div class="kzn-icon-wrapper">
                                                <div class="kzn-icon">
                                                    <i class="fa-solid fa-graduation-cap"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kzn-widget kzn-counter">
                                            <div class="kzn-counter-title">Students Placed</div>
                                            <div class="kzn-counter-number-wrapper">
                                                <span class="kzn-counter-number-prefix  "></span>
                                                <span class="kzn-counter-number counter" data-duration="1000"
                                                    data-to-value="12" data-from-value="0" data-target="450">400</span>

                                                <span class="kzn-counter-number">+</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="kzn-column kzn-col-20 col-sm-4 kzn-top-column kzn-element  odd " data-id="31ef6360"
                    data-element_type="column">
                    <div class="kzn-widget-wrap kzn-element-populated card">
                        <section class="kzn-inner-section kzn-element" data-id="28415b14" data-element_type="section">
                            <div class="kzn-container kzn-column-gap-default">
                                <div class="kzn-column kzn-col-100 kzn-inner-column kzn-element">
                                    <div class="kzn-widget-wrap kzn-element-populated">
                                        <div class="kzn-widget kzn-icon">
                                            <div class="kzn-icon-wrapper">
                                                <div class="kzn-icon">
                                                    <i class="fa-solid fa-graduation-cap"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kzn-widget kzn-counter">
                                            <div class="kzn-counter-title">Students Placed</div>
                                            <div class="kzn-counter-number-wrapper">
                                                <span class="kzn-counter-number-prefix  "></span>
                                                <span class="kzn-counter-number counter" data-duration="1000"
                                                    data-to-value="12" data-from-value="0" data-target="450">400</span>

                                                <span class="kzn-counter-number">+</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>


    </section>


    <!-- section eight start ------------------------------------------------------------------- -->


    <div class="container mb-3 mt-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="row  text-center justify-content-center review text-white ">

                        <div class="col-lg-6 col-md-6  inement  ">
                            <div class="text-left"> <i class="fa fa-quote-left" aria-hidden="true"></i> </div>

                            I recently completed the Java Developer course, and I’m excited to share my experience.
                            Overall, the course provided a comprehensive introduction to Java programming and equipped
                            me with valuable skills.
                            <div class=" contactdetail d-flex justify-content-center">
                                <button class="btn btn-primary btn-toggle d-lg-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#socialIcons" aria-expanded="false"
                                    aria-controls="socialIcons">
                                    <i class="fa-solid fa-share-alt"></i>
                                </button>
                                <!-- Social Media Icons Container -->




                                <a href="#" class="btn btn-social btn-facebook bounceInRight animated"
                                    data-animate="bounceInRight">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="#" class="btn btn-social btn-twitter bounceInRight animated"
                                    data-animate="bounceInRight" data-delay="100">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>

                                <a href="#" class="btn btn-social btn-instagram bounceInRight animated"
                                    data-animate="bounceInRight" data-delay="300">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="#" class="btn btn-social btn-linkedin bounceInRight animated"
                                    data-animate="bounceInRight">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>


                            </div>


                        </div>
                        <div class="col-lg-4 col-md-4   inement ">
                            <img src="./assets/img/portrait-bearded-arabian-software-developer-with-wireless-headphones-around-neck-standing-desk-with-computers-office_274679-11473.avif"
                                class="d-block w-100 test-review" alt="Slider Image 1">
                            <h3 class="h3 pt-2"> vishal patil..</h3>
                            <span class="h5"> java developer</span>
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row  text-center justify-content-center review text-white ">

                        <div class="col-lg-6 col-md-6  inement  ">
                            <div class="text-left"> <i class="fa fa-quote-left" aria-hidden="true"></i> </div>

                            I recently completed the Java Developer course, and I’m excited to share my experience.
                            Overall, the course provided a comprehensive introduction to Java programming and equipped
                            me with valuable skills.
                            <div class=" contactdetail d-flex justify-content-center">
                                <button class="btn btn-primary btn-toggle d-lg-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#socialIcons" aria-expanded="false"
                                    aria-controls="socialIcons">
                                    <i class="fa-solid fa-share-alt"></i>
                                </button>
                                <!-- Social Media Icons Container -->

                                <a href="#" class="btn btn-social btn-facebook bounceInRight animated"
                                    data-animate="bounceInRight">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="#" class="btn btn-social btn-twitter bounceInRight animated"
                                    data-animate="bounceInRight" data-delay="100">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>

                                <a href="#" class="btn btn-social btn-instagram bounceInRight animated"
                                    data-animate="bounceInRight" data-delay="300">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="#" class="btn btn-social btn-linkedin bounceInRight animated"
                                    data-animate="bounceInRight">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>


                            </div>


                        </div>
                        <div class="col-lg-4 col-md-4   inement ">
                            <img src="./assets/img/college-student-carrying-backpack-holdi.avif"
                                class="d-block w-100 test-review" alt="Slider Image 1">
                            <h3 class="h3 pt-2"> vishal patil..</h3>
                            <span class="h5"> java developer</span>
                        </div>

                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row  text-center justify-content-center review text-white ">

                        <div class="col-lg-6 col-md-6  inement  ">
                            <div class="text-left"> <i class="fa fa-quote-left" aria-hidden="true"></i> </div>

                            I recently completed the Java Developer course, and I’m excited to share my experience.
                            Overall, the course provided a comprehensive introduction to Java programming and equipped
                            me with valuable skills.
                            <div class=" contactdetail d-flex justify-content-center">
                                <button class="btn btn-primary btn-toggle d-lg-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#socialIcons" aria-expanded="false"
                                    aria-controls="socialIcons">
                                    <i class="fa-solid fa-share-alt"></i>
                                </button>
                                <!-- Social Media Icons Container -->

                                <a href="#" class="btn btn-social btn-facebook bounceInRight animated"
                                    data-animate="bounceInRight">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="#" class="btn btn-social btn-twitter bounceInRight animated"
                                    data-animate="bounceInRight" data-delay="100">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>

                                <a href="#" class="btn btn-social btn-instagram bounceInRight animated"
                                    data-animate="bounceInRight" data-delay="300">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="#" class="btn btn-social btn-linkedin bounceInRight animated"
                                    data-animate="bounceInRight">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>


                            </div>


                        </div>
                        <div class="col-lg-4 col-md-4   inement ">
                            <img src="./assets/img/smiling-university-student-holding-textbook-with-classmates-reading-background_1218867-299167.avif"
                                class="d-block w-100 test-review" alt="Slider Image 1">
                            <h3 class="h3 pt-2"> vishal patil..</h3>
                            <span class="h5"> java developer</span>
                        </div>

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- thirteenth section ----------------------------------------------------------------------------------------  -->



    <!-- Footer 2 - Bootstrap Brain Component -->
    <style>
        .context-dark,
        .bg-gray-dark,
        .bg-primary {
            /* color: rgba(255, 255, 255, 0.8); */
            color: white;
        }

        .footer-classic a,
        .footer-classic a:focus,
        .footer-classic a:active {
            color: #ffffff;
            padding-top: 50px;

        }

        .nav-list li {
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .nav-list li a:hover:before {
            margin-left: 0px;


            opacity: 1;
            visibility: visible;
        }

        /* Active tab text color */

        .bg-secondary-subtle-2 {
            /* background-image: url("https://www.kaizensoftservices.com/web_demo/Tour/Assets/background-img.jpg"); */
            background: linear-gradient(90deg, rgb(194, 184, 94) 20%, rgb(158, 122, 165) 70%, rgb(45, 45, 243) 100%);
            /* color: white; */
            color: #141313;
        }

        .nav-item:hover {
            color: red;
        }

        ul,
        ol {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .logo_light {
            width: 127px;
            height: 91px;
        }

        .social-inner {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            /* padding: 23px; */
            font: 900 13px/1 "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.5);
        }

        .social-container .col {
            border: 1px solid rgba(255, 255, 255, 0.1);
            margin-top: 50px;
        }

        .nav-list li a:before {
            content: "\f14f";
            font: 400 21px/1 "Material Design Icons";
            color: #4d6de6;
            display: inline-block;
            vertical-align: baseline;
            margin-left: -28px;
            margin-right: 7px;
            opacity: 0;
            visibility: hidden;
            transition: .22s ease;
        }

        .widget {
            color: white;
        }


        .a-change {
            color: white;
        }




        a {
            position: relative;
            text-decoration: none;
            color: #000;
        }

        a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 100%;
            height: 2px;
            background-color: #38af0d;
            transition: height 0.3s;
            transform: scaleX(0);
            transform-origin: bottom right;
        }

        a:hover::after {
            transform: scaleX(1);
        }

        .footer_icon {
            margin-bottom: 0px;

            color: white;
        }

        @media (min-width: 370px) and (max-width: 768px) {
            .top {
                flex-direction: column;
            }

            .eur {
                width: 100%;
            }

            .ico {

                margin-top: 15px;
            }

            .price {
                display: none;
            }
        }

        .pic {
            border-radius: 20px;
            height: 400px;
            overflow: hidden;
        }

        .reivew {
            border-radius: 30px;
        }

        .reivew1 {
            padding: 10px;
        }
    </style>
    <footer class="footer">


        <section class=" py-4 py-md-5 py-xl-8 border-top border-light " style="background-color:#141313">
            <div class="container overflow-hidden">
                <div class="row gy-4 gy-lg-0 justify-content-xl-between">
                    <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                        <div class="widget">
                            <a class="brand" href="index.php"><img class="brand-logo-light logo_light img-fluid"
                                    src="./assets/img/logo-corp-red.png" alt=""></a>
                            <p class="mb-2 mt-3">Kaizen softservices vision is to be the leading provider of
                                affordable and
                                sustainable tourism experiences in Dubai and around the world.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                        <div class="widget">
                            <h4 class="widget-title mb-4">kaizensoftservices</h4>
                            <address class="mb-4">swargate, pune, maharashtra, india</address>
                            <p class="mb-1">
                                <a class=" text-decoration-none a-change" href="tel:+15057922430">+91 1234567890</a>
                            </p>
                            <p class="mb-0">
                                <a class=" text-decoration-none a-change"
                                    href="mailto:demo@yourdomain.com">abc@gmail.com</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                        <div class="widget">
                            <h4 class="widget-title mb-4">Learn More</h4>
                            <ul class="list-unstyled ">
                                <li class="mb-2">
                                    <a href="#!" class="text-decoration-none a-change ">About</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#!" class=" text-decoration-none a-change">Contact</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#!" class=" text-decoration-none a-change">Advertise</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#!" class=" text-decoration-none a-change">Terms of Service</a>
                                </li>
                                <li class="mb-0">
                                    <a href="#!" class=" text-decoration-none a-change">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-xl-4">
                        <div class="widget">
                            <h4 class="widget-title mb-4">Our Newsletter</h4>
                            <p class="mb-4">Subscribe to our newsletter to get our news & discounts delivered to
                                you.
                            </p>
                            <form action="#!">
                                <div class="row gy-4">
                                    <div class="col-12">
                                        <div class="input-group">
                                            <span class="input-group-text" id="email-newsletter-addon">
                                                <i class="bi bi-envelope fs-3"></i>
                                            </span>
                                            <input type="email" class="form-control" id="email-newsletter" value=""
                                                placeholder="Email Address" aria-label="email-newsletter"
                                                aria-describedby="email-newsletter-addon" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn btn-primary" type="submit">submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- Copyright - Bootstrap Brain Component -->
        <div class="py-2 py-md-3 py-xl-8 border-top border-light-subtle" style="background-color: black">
            <div class="container overflow-hidden">
                <div class="row gy-4 gy-md-0 align-items-md-center">
                    <div class="col-xs-12 col-md-7 order-1 order-md-0">
                        <div class="copyright text-white text-md-start">
                            &copy; 2024. All Rights Reserved.
                        </div>
                        <div class="credits text-white text-center text-md-start mt-2 ">
                            Powerd by <a href="https://kaizensoftservices.com/"
                                class="link-secondary text-white  text-decoration-none">Kaizen Soft Services</a>
                            <!-- with <span class="text-white">&#9829;</span> -->
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-5 order-0 order-md-1 ">
                        <div class="social-media-wrapper">
                            <div class="list-unstyled m-0 p-0 d-flex justify-content-center justify-content-center ">
                                <button class="btn btn-primary btn-toggle d-lg-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#socialIcons" aria-expanded="false"
                                    aria-controls="socialIcons">
                                    <i class="fa-solid fa-share-alt"></i>
                                </button>
                                <!-- Social Media Icons Container -->

                                <a href="#" class="btn btn-social btn-facebook bounceInRight animated"
                                    data-animate="bounceInRight">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="#" class="btn btn-social btn-twitter bounceInRight animated"
                                    data-animate="bounceInRight" data-delay="100">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>

                                <a href="#" class="btn btn-social btn-instagram bounceInRight animated"
                                    data-animate="bounceInRight" data-delay="300">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="#" class="btn btn-social btn-linkedin bounceInRight animated"
                                    data-animate="bounceInRight">
                                    <i class="fa-brands fa-linkedin-in"></i>

                                </a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="phone">
            <a href="tel:9028011129" target="_blank" class="phone">
                <i class="fa fa-phone"></i>
            </a>
        </div>
        <a href="#" class="btn btn-social btn-facebook bounceInRight animated" data-animate="bounceInRight"
            data-delay="100">

        </a>
        <div class="whats-app">
            <a href="https://web.whatsapp.com/send?phone=919028011129&amp;text&amp;app_absent=0" target="_blank"
                class="whats-app">
                <i class="fa-brands fa-whatsapp "></i></a>
        </div>
        <a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647;"><i
                class="fa-regular fa-reply"></i></a>



    </footer>


    <!-- jQuery (necessary for FancyBox) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Slick Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>

    <!-- Fancybox JS -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>

    <!-- WOW.js JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow.js/1.1.2/wow.min.js"></script>

    <!-- AOS (Animate On Scroll) JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Vanilla Tilt JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.2/vanilla-tilt.min.js"></script>

    <!-- Vanilla LazyLoad -->
    <script async src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@16.1.0/dist/lazyload.min.js"></script>

    <!-- Include Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize Swiper


            var swiper = new Swiper('.swiper', {
                slidesPerView: 1, // Display one card at a time
                spaceBetween: 60, // Space between slides

                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1, // Ensure one card per view on small screens
                    },
                    768: {
                        slidesPerView: 2, // For larger screens, adjust as needed
                    },
                    1024: {
                        slidesPerView: 3, // For even larger screens
                    },

                },

            });

            var swiperButtonNext = document.querySelector('.swiper-button-next');
            var swiperWrapper = document.querySelector('.swiper-wrapper');

            if (swiperButtonNext && swiperWrapper) {
                // Add a click event listener to the button
                swiperButtonNext.addEventListener('click', function () {
                    // Adjust the position and margin-right on click
                    swiperWrapper.style.transform = 'translate3d(-65px, 0, 0)';

                    slideToHide.style.disolay = 'none';
                });
            }
            // Add padding to Swiper container

        });
    </script>



    <script>
        document.querySelector('.kzn-elem-element').classList.add('animate');
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const navbar = document.querySelector('.navbar-custom');

            window.addEventListener('scroll', function () {
                if (window.scrollY > 50) { // Adjust the scroll distance as needed
                    navbar.classList.add('sticky-navbar');
                } else {
                    navbar.classList.remove('sticky-navbar');
                }
            });
        });

    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const dropdownButton = document.getElementById('branchesDropdown');
            const dropdownMenu = document.querySelector('#branchesDropdown + .dropdown-menu');

            dropdownButton.addEventListener('click', function () {
                const isOpen = dropdownMenu.classList.contains('show');
                if (isOpen) {
                    dropdownMenu.classList.remove('show');
                } else {
                    dropdownMenu.classList.add('show');
                }
            });
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const counters = document.querySelectorAll('.counter');

            counters.forEach(counter => {
                counter.innerText = '0';

                const updateCounter = () => {
                    const target = +counter.getAttribute('data-target');
                    const c = +counter.innerText;
                    const increment = target / 200;

                    if (c < target) {
                        counter.innerText = `${Math.ceil(c + increment)}`;
                        setTimeout(updateCounter, 1);
                    } else {
                        counter.innerText = target;
                    }
                };

                const runCounter = () => {
                    const counterTop = counter.getBoundingClientRect().top;
                    const screenBottom = window.innerHeight;

                    if (counterTop < screenBottom) {
                        updateCounter();
                        window.removeEventListener('scroll', runCounter);
                    }
                };

                window.addEventListener('scroll', runCounter);
                runCounter();
            });
        });
    </script>


</body>

</html>
