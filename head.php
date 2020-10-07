<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?=$title?> | Soon Developments Ltd - Clearing, Deliveries, and Logistics Experts Worldwide </title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/intlInputPhone.min.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <!-- <a class="navbar-brand" href="index"> <img src="img/logo.png" alt="logo"> </a> -->
                        <a class="navbar-brand" href="index"> <img src="img/soon-logo-127x70.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about">About</a>
                                </li>
                                 <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="service" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Services
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="air">Air Freight</a>
                                        <a class="dropdown-item" href="ocean">Ocean Freight</a>
                                        <a class="dropdown-item" href="road">Road Freight</a>
                                        <a class="dropdown-item" href="warehousing">Warehousing</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="delivery">delivery</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="blog"> blog</a>
                                        <a class="dropdown-item" href="single-blog">Single blog</a>
                                        <a class="dropdown-item" href="elements">Elements</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                    </nav>
                </div>
            </div>
        </div>
        <!-- <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div> -->
    </header>
    <!-- Header part end-->

    <script async>
        //Script to Make currently selected link active
        link= '<?php echo basename($_SERVER["REQUEST_URI"], ".php"); ?>'
        
        var els = document.querySelectorAll("a[href='"+link+"']");
        els[0].classList.add('active_color');

    </script>
