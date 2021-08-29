<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Laravel 8 - Belajar Dari Awal PARSINTA">
    <meta name="keywords" content="admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="SANGGATIKA">

    <title>Dashboard | {{ $appName }}</title>

    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/swiper.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/semi-dark-layout.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/extensions/swiper.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/faq.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="javascript:void(0);"><i class="ficon bx bx-menu"></i></a></li>
                        </ul>                        
                    </div>
                    <ul class="nav navbar-nav float-right">                        
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon bx bx-search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
                                <input class="input" type="text" placeholder="Explore Frest..." tabindex="-1" data-search="template-search">
                                <div class="search-input-close"><i class="bx bx-x"></i></div>
                                <ul class="search-list"></ul>
                            </div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="javascript:void(0);" data-toggle="dropdown"><i class="ficon bx bx-bell bx-tada bx-flip-horizontal"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header px-1 py-75 d-flex justify-content-between"><span class="notification-title">7 new Notification</span><span class="text-bold-400 cursor-pointer">Mark all as read</span></div>
                                </li>
                                <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="javascript:void(0);">
                                        <div class="media d-flex align-items-center">
                                            <div class="media-left pr-0">
                                                <div class="avatar mr-1 m-0"><img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="39" width="39"></div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading"><span class="text-bold-500">Congratulate Socrates Itumay</span> for work anniversaries</h6><small class="notification-text">Mar 15 12:32pm</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-50 text-primary justify-content-center" href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="javascript:void(0);" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name">John Doe</span><span class="user-status text-muted">Available</span></div><span><img class="round" src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right pb-0"><a class="dropdown-item" href="page-user-profile.html"><i class="bx bx-user mr-50"></i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="bx bx-envelope mr-50"></i> My Inbox</a>
                                <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="auth-login.html"><i class="bx bx-power-off mr-50"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/vertical-menu-template-semi-dark/index.html">
                        <div class="brand-logo">
                            <svg class="logo" width="26px" height="26px" viewbox="0 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>icon</title>
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="50%" y1="0%" x2="50%" y2="100%">
                                        <stop stop-color="#5A8DEE" offset="0%"></stop>
                                        <stop stop-color="#699AF9" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop stop-color="#FDAC41" offset="0%"></stop>
                                        <stop stop-color="#E38100" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Sprite" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="sprite" transform="translate(-69.000000, -61.000000)">
                                        <g id="Group" transform="translate(17.000000, 15.000000)">
                                            <g id="icon" transform="translate(52.000000, 46.000000)">
                                                <path id="Combined-Shape" d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z"></path>
                                                <path id="Combined-Shape" d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5378966 4.74673291,13.1939746 4.7846258,12.8556254 L8.55057141,12.8560055 C8.48653249,13.1896162 8.45300462,13.5340745 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.529522,8.45300462 13.180715,8.48740462 12.8430777,8.55306931 L12.8426531,4.78608796 C13.1851829,4.7472336 13.5334422,4.72727273 13.8863636,4.72727273 Z" fill="#4880EA"></path>
                                                <path id="Combined-Shape" d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z" fill="url(#linearGradient-1)"></path>
                                                <rect id="Rectangle" x="0" y="0" width="7.68181818" height="7.68181818"></rect>
                                                <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0" width="7.68181818" height="7.68181818"></rect>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h2 class="brand-text mb-0">Frest</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
                <li class=" nav-item"><a href="../../../html/ltr/vertical-menu-template-semi-dark/index.html"><i class="menu-livicon" data-icon="desktop"></i><span class="menu-title text-truncate" data-i18n="Dashboard">Dashboard</span><span class="badge badge-light-danger badge-pill badge-round float-right mr-50 ml-auto">2</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="dashboard-ecommerce.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="eCommerce">eCommerce</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="dashboard-analytics.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Analytics">Analytics</span></a>
                        </li>
                    </ul>
                </li>

                <li class=" navigation-header text-truncate"><span data-i18n="Pages">Application</span>
                </li>

                <li class=" nav-item"><a href="page-user-profile.html"><i class="menu-livicon" data-icon="user"></i><span class="menu-title text-truncate" data-i18n="User Profile">User Profile</span></a>
                </li>
                <li class="active nav-item"><a href="page-faq.html"><i class="menu-livicon" data-icon="question-alt"></i><span class="menu-title text-truncate" data-i18n="FAQ">FAQ</span></a>
                </li>

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="breadcrumbs-top">
                        <h5 class="content-header-title float-left pr-1 mb-0">FAQ</h5>
                        <div class="breadcrumb-wrapper d-none d-sm-block">
                            <ol class="breadcrumb p-0 mb-0 pl-1">
                                <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Pages</a>
                                </li>
                                <li class="breadcrumb-item active">FAQ
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- faq search start -->
                <section class="faq-search">
                    <div class="row">
                        <div class="col-12">
                            <div class="card faq-bg bg-transparent box-shadow-0 p-1 p-md-5">
                                <div class="card-body p-0">
                                    <h1 class="faq-title text-center mb-3">Hello, how can we help?</h1>
                                    <form>
                                        <fieldset class="faq-search-width form-group position-relative w-50 mx-auto">
                                            <input type="text" class="form-control round form-control-lg shadow pl-2" id="searchbar" placeholder="Ask a question...">
                                            <button class="btn btn-primary round position-absolute d-none d-sm-block" type="button">Search</button>
                                            <button class="btn btn-primary round position-absolute d-block d-sm-none" type="button"><i class="bx bx-search"></i></button>
                                        </fieldset>
                                    </form>
                                    <p class="card-text text-center mt-3 font-medium-1 text-muted">
                                        or choose a category to quickly find the help you need</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- faq search ends -->

                <!-- faq start -->
                <section class="faq">
                    <div class="row">
                        <div class="col-12">
                            <!-- swiper start -->
                            <div class="card bg-transparent shadow-none">
                                <div class="card-body">
                                    <div class="swiper-centered-slides swiper-container p-1">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide rounded swiper-shadow" id="getting-text"> <i class="bx bx-flag mb-1 font-large-1"></i>
                                                <div class="cent-text1">Getting Started</div>
                                            </div>
                                            <div class="swiper-slide rounded swiper-shadow" id="pricing-text"> <i class="bx bx-dollar-circle mb-1 font-large-1"></i>
                                                <div class="cent-text1">Pricing & Plans</div>
                                            </div>
                                            <div class="swiper-slide rounded swiper-shadow" id="sales-text"> <i class="bx bx-shopping-bag mb-1 font-large-1"></i>
                                                <div class="cent-text1">Sales Question</div>
                                            </div>
                                            <div class="swiper-slide rounded swiper-shadow" id="usage-text"> <i class="bx bx-book-open mb-1 font-large-1"></i>
                                                <div class="cent-text1">Usage Guides</div>
                                            </div>
                                            <div class="swiper-slide rounded swiper-shadow" id="general-text"> <i class="bx bx-info-circle mb-1 font-large-1"></i>
                                                <div class="cent-text1">General Guide</div>
                                            </div>
                                        </div>
                                        <!-- Add Arrows -->
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                    <div class="main-wrapper-content">
                                        <div class="wrapper-content" data-faq="getting-text">
                                            <div class="text-center p-md-4 p-sm-1 py-1 p-0">
                                                <h1 class="faq-title">Getting Started</h1>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam reprehenderit alias voluptas aspernatur
                                                    maiores
                                                    quis molestiae totam deserunt exercitationem ipsam officiis nisi, labore magni, commodi quaerat quia
                                                    earum
                                                    quas illo ea amet minus ad dolor?</p>
                                            </div>
                                            <!-- accordion start -->
                                            <div id="accordion-icon-wrapper1" class="collapse-icon accordion-icon-rotate">
                                                <div class="accordion" id="accordionWrapar2">
                                                    <div class="card collapse-header">
                                                        <div id="heading5" class="card-header" data-toggle="collapse" role="button" data-target="#accordion5" aria-expanded="false" aria-controls="accordion5">
                                                            <span class="collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                Purchasing process?
                                                            </span>
                                                        </div>
                                                        <div id="accordion5" role="tabpanel" data-parent="#accordionWrapar2" aria-labelledby="heading5" class="collapse">
                                                            <div class="card-body">
                                                                Cheesecake cotton candy bonbon muffin cupcake tiramisu croissant. Tootsie roll sweet candy
                                                                bear
                                                                claw chupa chups lollipop toffee. Macaroon donut liquorice powder candy carrot cake macaroon
                                                                fruitcake. Cookie toffee lollipop cotton candy ice cream dragée soufflé.
                                                                Cake tiramisu lollipop wafer pie soufflé dessert tart. Biscuit ice cream pie apple pie topping
                                                                oat cake dessert. Soufflé icing caramels. Chocolate cake icing ice cream macaroon pie
                                                                cheesecake
                                                                liquorice apple pie. <br> <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                Voluptates
                                                                alias
                                                                architecto ullam? Ratione, vitae, amet corrupti non unde praesentium laborum incidunt fugit
                                                                vel illo
                                                                debitis
                                                                dicta illum fugiat, at consequatur! Voluptatum sunt dolorem at deleniti dolor quis a nam
                                                                facilis.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading6" class="card-header" data-toggle="collapse" role="button" data-target="#accordion66" aria-expanded="false" aria-controls="accordion66">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How secure are your payment?
                                                            </span>
                                                        </div>
                                                        <div id="accordion66" role="tabpanel" data-parent="#accordionWrapar2" aria-labelledby="heading6" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                candy oat cake croissant halvah gummi bears toffee powder.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading17" class="card-header" data-toggle="collapse" role="button" data-target="#accordion71" aria-expanded="false" aria-controls="accordion71">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How to apply for a prepaid card?
                                                            </span>
                                                        </div>
                                                        <div id="accordion71" role="tabpanel" data-parent="#accordionWrapar2" aria-labelledby="heading17" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Gingerbread liquorice liquorice cake muffin lollipop powder chocolate cake. Gummi bears lemon
                                                                drops toffee liquorice pastry cake caramels chocolate bar brownie. Sweet biscuit chupa chups
                                                                sweet.
                                                                Halvah fruitcake gingerbread croissant dessert cupcake. Chupa chups chocolate bar donut tart.
                                                                Donut cake dessert cookie. Ice cream tootsie roll powder chupa chups pastry cupcake soufflé.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading81" class="card-header" data-toggle="collapse" role="button" data-target="#accordion801" aria-expanded="false" aria-controls="accordion801">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How secure is my data in App?
                                                            </span>
                                                        </div>
                                                        <div id="accordion801" role="tabpanel" data-parent="#accordionWrapar2" aria-labelledby="heading81" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Icing sweet roll cotton candy brownie candy canes candy canes. Pie jelly dragée pie. Ice cream
                                                                jujubes wafer. Wafer croissant carrot cake wafer gummies gummies chupa chups halvah bonbon.
                                                                Gummi bears cotton candy jelly-o halvah. Macaroon apple pie dragée bonbon marzipan cheesecake.
                                                                Jelly jelly beans marshmallow.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading91" class="card-header" data-toggle="collapse" role="button" data-target="#accordion125" aria-expanded="false" aria-controls="accordion125">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How do I know latest version?
                                                            </span>
                                                        </div>
                                                        <div id="accordion125" role="tabpanel" data-parent="#accordionWrapar2" aria-labelledby="heading91" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                candy oat cake croissant halvah gummi bears toffee powder.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading103" class="card-header" data-toggle="collapse" role="button" data-target="#accordion142" aria-expanded="false" aria-controls="accordion142">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                Download documentation
                                                            </span>
                                                        </div>
                                                        <div id="accordion142" role="tabpanel" data-parent="#accordionWrapar2" aria-labelledby="heading103" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                candy oat cake croissant halvah gummi bears toffee powder.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading113" class="card-header" data-toggle="collapse" role="button" data-target="#accordion91" aria-expanded="false" aria-controls="accordion91">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How secure my personal info?
                                                            </span>
                                                        </div>
                                                        <div id="accordion91" role="tabpanel" data-parent="#accordionWrapar2" aria-labelledby="heading113" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                candy oat cake croissant halvah gummi bears toffee powder.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion end -->
                                        </div>
                                        <div class="wrapper-content" data-faq="pricing-text">
                                            <div class="text-center p-md-4 p-sm-1 py-1 p-0">
                                                <h1 class="faq-title">Pricing & Planes</h1>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam reprehenderit alias voluptas aspernatur
                                                    maiores
                                                    quis molestiae totam deserunt exercitationem ipsam officiis nisi, labore magni, commodi quaerat quia
                                                    earum
                                                    quas illo ea amet minus ad dolor?</p>
                                            </div>
                                            <!-- accordion start -->
                                            <div id="accordion-icon-wrapper2" class="collapse-icon accordion-icon-rotate">

                                                <div class="accordion" id="accordionWrapar3">
                                                    <div class="card collapse-header">
                                                        <div id="heading27" class="card-header" data-toggle="collapse" role="button" data-target="#accordion16" aria-expanded="false" aria-controls="accordion16">
                                                            <span class="collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                What are your Purchasing process?
                                                            </span>
                                                        </div>
                                                        <div id="accordion16" role="tabpanel" data-parent="#accordionWrapar3" aria-labelledby="heading27" class="collapse">
                                                            <div class="card-body">
                                                                Cheesecake cotton candy bonbon muffin cupcake tiramisu croissant. Tootsie roll sweet candy
                                                                bear
                                                                claw chupa chups lollipop toffee. Macaroon donut liquorice powder candy carrot cake macaroon
                                                                fruitcake. Cookie toffee lollipop cotton candy ice cream dragée soufflé.
                                                                Cake tiramisu lollipop wafer pie soufflé dessert tart. Biscuit ice cream pie apple pie topping
                                                                oat cake dessert. Soufflé icing caramels. Chocolate cake icing ice cream macaroon pie
                                                                cheesecake
                                                                liquorice apple pie. <br> <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                Voluptates
                                                                alias
                                                                architecto ullam? Ratione, vitae, amet corrupti non unde praesentium laborum incidunt fugit
                                                                vel illo
                                                                debitis
                                                                dicta illum fugiat, at consequatur! Voluptatum sunt dolorem at deleniti dolor quis a nam
                                                                facilis.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading82" class="card-header" data-toggle="collapse" role="button" data-target="#accordion26" aria-expanded="false" aria-controls="accordion26">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How rarely our information gets?
                                                            </span>
                                                        </div>
                                                        <div id="accordion26" role="tabpanel" data-parent="#accordionWrapar3" aria-labelledby="heading82" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                candy oat cake croissant halvah gummi bears toffee powder.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading37" class="card-header" data-toggle="collapse" role="button" data-target="#accordion72" aria-expanded="false" aria-controls="accordion72">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How to apply for a unknown card?
                                                            </span>
                                                        </div>
                                                        <div id="accordion72" role="tabpanel" data-parent="#accordionWrapar3" aria-labelledby="heading37" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Gingerbread liquorice liquorice cake muffin lollipop powder chocolate cake. Gummi bears lemon
                                                                drops toffee liquorice pastry cake caramels chocolate bar brownie. Sweet biscuit chupa chups
                                                                sweet.

                                                                Halvah fruitcake gingerbread croissant dessert cupcake. Chupa chups chocolate bar donut tart.
                                                                Donut cake dessert cookie. Ice cream tootsie roll powder chupa chups pastry cupcake soufflé.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading83" class="card-header" data-toggle="collapse" role="button" data-target="#accordion802" aria-expanded="false" aria-controls="accordion802">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How secure is data and info in App?
                                                            </span>
                                                        </div>
                                                        <div id="accordion802" role="tabpanel" data-parent="#accordionWrapar3" aria-labelledby="heading83" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Icing sweet roll cotton candy brownie candy canes candy canes. Pie jelly dragée pie. Ice cream
                                                                jujubes wafer. Wafer croissant carrot cake wafer gummies gummies chupa chups halvah bonbon.

                                                                Gummi bears cotton candy jelly-o halvah. Macaroon apple pie dragée bonbon marzipan cheesecake.
                                                                Jelly jelly beans marshmallow.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading92" class="card-header" data-toggle="collapse" role="button" data-target="#accordion121" aria-expanded="false" aria-controls="accordion121">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How do I know about midest version?
                                                            </span>
                                                        </div>
                                                        <div id="accordion121" role="tabpanel" data-parent="#accordionWrapar3" aria-labelledby="heading92" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                candy oat cake croissant halvah gummi bears toffee powder.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading104" class="card-header" data-toggle="collapse" role="button" data-target="#accordion143" aria-expanded="false" aria-controls="accordion143">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                Download offline documentation works?
                                                            </span>
                                                        </div>
                                                        <div id="accordion143" role="tabpanel" data-parent="#accordionWrapar3" aria-labelledby="heading104" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                candy oat cake croissant halvah gummi bears toffee powder.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading114" class="card-header" data-toggle="collapse" role="button" data-target="#accordion92" aria-expanded="false" aria-controls="accordion92">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                Secure my personal data?
                                                            </span>
                                                        </div>
                                                        <div id="accordion92" role="tabpanel" data-parent="#accordionWrapar3" aria-labelledby="heading114" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                candy oat cake croissant halvah gummi bears toffee powder.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion end -->
                                        </div>
                                        <div class="wrapper-content" data-faq="sales-text">
                                            <div class="text-center p-md-4 p-sm-1 py-1 p-0">
                                                <h1 class="faq-title">Sales Question</h1>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam reprehenderit alias voluptas aspernatur
                                                    maiores
                                                    quis molestiae totam deserunt exercitationem ipsam officiis nisi, labore magni, commodi quaerat quia
                                                    earum
                                                    quas illo ea amet minus ad dolor?</p>
                                            </div>
                                            <!-- accordion start -->
                                            <div id="accordion-icon-wrapper3" class="collapse-icon accordion-icon-rotate">

                                                <div class="accordion" id="accordionWrapar4">
                                                    <div class="card collapse-header">
                                                        <div id="heading47" class="card-header" data-toggle="collapse" role="button" data-target="#accordion73" aria-expanded="false" aria-controls="accordion73">
                                                            <span class="collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                Detailed sales process?
                                                            </span>
                                                        </div>
                                                        <div id="accordion73" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading47" class="collapse">
                                                            <div class="card-body">
                                                                Cheesecake cotton candy bonbon muffin cupcake tiramisu croissant. Tootsie roll sweet candy
                                                                bear
                                                                claw chupa chups lollipop toffee. Macaroon donut liquorice powder candy carrot cake macaroon
                                                                fruitcake. Cookie toffee lollipop cotton candy ice cream dragée soufflé.
                                                                Cake tiramisu lollipop wafer pie soufflé dessert tart. Biscuit ice cream pie apple pie topping
                                                                oat cake dessert. Soufflé icing caramels. Chocolate cake icing ice cream macaroon pie
                                                                cheesecake
                                                                liquorice apple pie. <br> <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                Voluptates
                                                                alias
                                                                architecto ullam? Ratione, vitae, amet corrupti non unde praesentium laborum incidunt fugit
                                                                vel illo
                                                                debitis
                                                                dicta illum fugiat, at consequatur! Voluptatum sunt dolorem at deleniti dolor quis a nam
                                                                facilis.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading93" class="card-header" data-toggle="collapse" role="button" data-target="#accordion36" aria-expanded="false" aria-controls="accordion36">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                What you sales ?
                                                            </span>
                                                        </div>
                                                        <div id="accordion36" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading93" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                candy oat cake croissant halvah gummi bears toffee powder.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading57" class="card-header" data-toggle="collapse" role="button" data-target="#accordion74" aria-expanded="false" aria-controls="accordion74">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How to apply for a sales card?
                                                            </span>
                                                        </div>
                                                        <div id="accordion74" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading57" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Gingerbread liquorice liquorice cake muffin lollipop powder chocolate cake. Gummi bears lemon
                                                                drops toffee liquorice pastry cake caramels chocolate bar brownie. Sweet biscuit chupa chups
                                                                sweet.

                                                                Halvah fruitcake gingerbread croissant dessert cupcake. Chupa chups chocolate bar donut tart.
                                                                Donut cake dessert cookie. Ice cream tootsie roll powder chupa chups pastry cupcake soufflé.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading84" class="card-header" data-toggle="collapse" role="button" data-target="#accordion803" aria-expanded="false" aria-controls="accordion803">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How secure is my data in sales App?
                                                            </span>
                                                        </div>
                                                        <div id="accordion803" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading84" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Icing sweet roll cotton candy brownie candy canes candy canes. Pie jelly dragée pie. Ice cream
                                                                jujubes wafer. Wafer croissant carrot cake wafer gummies gummies chupa chups halvah bonbon.

                                                                Gummi bears cotton candy jelly-o halvah. Macaroon apple pie dragée bonbon marzipan cheesecake.
                                                                Jelly jelly beans marshmallow.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading94" class="card-header" data-toggle="collapse" role="button" data-target="#accordion122" aria-expanded="false" aria-controls="accordion122">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How do I know sales?
                                                            </span>
                                                        </div>
                                                        <div id="accordion122" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading94" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                candy oat cake croissant halvah gummi bears toffee powder.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading105" class="card-header" data-toggle="collapse" role="button" data-target="#accordion144" aria-expanded="false" aria-controls="accordion144">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                Download offline sales doc
                                                            </span>
                                                        </div>
                                                        <div id="accordion144" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading105" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                candy oat cake croissant halvah gummi bears toffee powder.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading115" class="card-header" data-toggle="collapse" role="button" data-target="#accordion93" aria-expanded="false" aria-controls="accordion93">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How secure my sales information?
                                                            </span>
                                                        </div>
                                                        <div id="accordion93" role="tabpanel" data-parent="#accordionWrapar4" aria-labelledby="heading115" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.
                                                                Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                candy oat cake croissant halvah gummi bears toffee powder.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion end -->
                                        </div>
                                        <div class="wrapper-content" data-faq="usage-text">
                                            <div class="text-center p-md-4 p-sm-1 py-1 p-0">
                                                <h1 class="faq-title">Usage Guides</h1>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam reprehenderit alias voluptas aspernatur
                                                    maiores
                                                    quis molestiae totam deserunt exercitationem ipsam officiis nisi, labore magni, commodi quaerat quia
                                                    earum
                                                    quas illo ea amet minus ad dolor? Lorem1 </p>
                                            </div>
                                            <!-- accordion start -->
                                            <div id="accordion-icon-wrapper4" class="collapse-icon accordion-icon-rotate">
                                                <div class="accordion" id="accordionWrapar5">
                                                    <div class="card collapse-header">
                                                        <div id="heading85" class="card-header" data-toggle="collapse" role="button" data-target="#accordion804" aria-expanded="false" aria-controls="accordion804">
                                                            <span class="collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                Purchasing user process?
                                                            </span>
                                                        </div>
                                                        <div id="accordion804" role="tabpanel" data-parent="#accordionWrapar5" aria-labelledby="heading85" class="collapse">
                                                            <div class="card-body">
                                                                Cheesecake cotton candy bonbon muffin cupcake tiramisu croissant. Tootsie roll sweet candy
                                                                bear
                                                                claw chupa chups lollipop toffee. Macaroon donut liquorice powder candy carrot cake macaroon
                                                                fruitcake. Cookie toffee lollipop cotton candy ice cream dragée soufflé.
                                                                Cake tiramisu lollipop wafer pie soufflé dessert tart. Biscuit ice cream pie apple pie topping
                                                                oat cake dessert. Soufflé icing caramels. Chocolate cake icing ice cream macaroon pie
                                                                cheesecake
                                                                liquorice apple pie. <br> <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                Voluptates
                                                                alias
                                                                architecto ullam? Ratione, vitae, amet corrupti non unde praesentium laborum incidunt fugit
                                                                vel illo
                                                                debitis
                                                                dicta illum fugiat, at consequatur! Voluptatum sunt dolorem at deleniti dolor quis a nam
                                                                facilis.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading106" class="card-header" data-toggle="collapse" role="button" data-target="#accordion46" aria-expanded="false" aria-controls="accordion46">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How secure are and legal rights?
                                                            </span>
                                                        </div>
                                                        <div id="accordion46" role="tabpanel" data-parent="#accordionWrapar5" aria-labelledby="heading106" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                candy oat cake croissant halvah gummi bears toffee powder.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading67" class="card-header" data-toggle="collapse" role="button" data-target="#accordion75" aria-expanded="false" aria-controls="accordion75">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How to write for a postpaid card?
                                                            </span>
                                                        </div>
                                                        <div id="accordion75" role="tabpanel" data-parent="#accordionWrapar5" aria-labelledby="heading67" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Gingerbread liquorice liquorice cake muffin lollipop powder chocolate cake. Gummi bears lemon
                                                                drops toffee liquorice pastry cake caramels chocolate bar brownie. Sweet biscuit chupa chups
                                                                sweet.

                                                                Halvah fruitcake gingerbread croissant dessert cupcake. Chupa chups chocolate bar donut tart.
                                                                Donut cake dessert cookie. Ice cream tootsie roll powder chupa chups pastry cupcake soufflé.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading86" class="card-header" data-toggle="collapse" role="button" data-target="#accordion805" aria-expanded="false" aria-controls="accordion805">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How refresh is my info in App?
                                                            </span>
                                                        </div>
                                                        <div id="accordion805" role="tabpanel" data-parent="#accordionWrapar5" aria-labelledby="heading86" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Icing sweet roll cotton candy brownie candy canes candy canes. Pie jelly dragée pie. Ice cream
                                                                jujubes wafer. Wafer croissant carrot cake wafer gummies gummies chupa chups halvah bonbon.

                                                                Gummi bears cotton candy jelly-o halvah. Macaroon apple pie dragée bonbon marzipan cheesecake.
                                                                Jelly jelly beans marshmallow.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading95" class="card-header" data-toggle="collapse" role="button" data-target="#accordion123" aria-expanded="false" aria-controls="accordion123">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How do write about about latest ?
                                                            </span>
                                                        </div>
                                                        <div id="accordion123" role="tabpanel" data-parent="#accordionWrapar5" aria-labelledby="heading95" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                candy oat cake croissant halvah gummi bears toffee powder.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading101" class="card-header" data-toggle="collapse" role="button" data-target="#accordion145" aria-expanded="false" aria-controls="accordion145">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                Download offline sales doc
                                                            </span>
                                                        </div>
                                                        <div id="accordion145" role="tabpanel" data-parent="#accordionWrapar5" aria-labelledby="heading101" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                candy oat cake croissant halvah gummi bears toffee powder.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading116" class="card-header" data-toggle="collapse" role="button" data-target="#accordion94" aria-expanded="false" aria-controls="accordion94">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How secure is your personal information?
                                                            </span>
                                                        </div>
                                                        <div id="accordion94" role="tabpanel" data-parent="#accordionWrapar5" aria-labelledby="heading116" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                candy oat cake croissant halvah gummi bears toffee powder.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion end -->
                                        </div>
                                        <div class="wrapper-content" data-faq="general-text">
                                            <div class="text-center p-md-4 p-sm-1 py-1 p-0">
                                                <h1 class="faq-title">General Guide</h1>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam reprehenderit alias voluptas aspernatur
                                                    maiores
                                                    quis molestiae totam deserunt exercitationem ipsam officiis nisi, labore magni, commodi quaerat quia
                                                    earum
                                                    quas illo ea amet minus ad dolor?</p>
                                            </div>
                                            <!-- accordion start -->
                                            <div id="accordion-icon-wrapper5" class="collapse-icon accordion-icon-rotate">
                                                <div class="accordion" id="accordionWrapar6">
                                                    <div class="card collapse-header">
                                                        <div id="heading96" class="card-header" data-toggle="collapse" role="button" data-target="#accordion95" aria-expanded="false" aria-controls="accordion95">
                                                            <span class="collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                I wanna write process?
                                                            </span>
                                                        </div>
                                                        <div id="accordion95" role="tabpanel" data-parent="#accordionWrapar6" aria-labelledby="heading96" class="collapse">
                                                            <div class="card-body">
                                                                Cheesecake cotton candy bonbon muffin cupcake tiramisu croissant. Tootsie roll sweet candy
                                                                bear
                                                                claw chupa chups lollipop toffee. Macaroon donut liquorice powder candy carrot cake macaroon
                                                                fruitcake. Cookie toffee lollipop cotton candy ice cream dragée soufflé.
                                                                Cake tiramisu lollipop wafer pie soufflé dessert tart. Biscuit ice cream pie apple pie topping
                                                                oat cake dessert. Soufflé icing caramels. Chocolate cake icing ice cream macaroon pie
                                                                cheesecake
                                                                liquorice apple pie. <br> <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                Voluptates
                                                                alias
                                                                architecto ullam? Ratione, vitae, amet corrupti non unde praesentium laborum incidunt fugit
                                                                vel illo
                                                                debitis
                                                                dicta illum fugiat, at consequatur! Voluptatum sunt dolorem at deleniti dolor quis a nam
                                                                facilis.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading111" class="card-header" data-toggle="collapse" role="button" data-target="#accordion56" aria-expanded="false" aria-controls="accordion56">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How untoched your gateway information?
                                                            </span>
                                                        </div>
                                                        <div id="accordion56" role="tabpanel" data-parent="#accordionWrapar6" aria-labelledby="heading111" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                candy oat cake croissant halvah gummi bears toffee powder.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading77" class="card-header" data-toggle="collapse" role="button" data-target="#accordion76" aria-expanded="false" aria-controls="accordion76">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How to apply for a details?
                                                            </span>
                                                        </div>
                                                        <div id="accordion76" role="tabpanel" data-parent="#accordionWrapar6" aria-labelledby="heading77" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Gingerbread liquorice liquorice cake muffin lollipop powder chocolate cake. Gummi bears lemon
                                                                drops toffee liquorice pastry cake caramels chocolate bar brownie. Sweet biscuit chupa chups
                                                                sweet.

                                                                Halvah fruitcake gingerbread croissant dessert cupcake. Chupa chups chocolate bar donut tart.
                                                                Donut cake dessert cookie. Ice cream tootsie roll powder chupa chups pastry cupcake soufflé.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading87" class="card-header" data-toggle="collapse" role="button" data-target="#accordion800" aria-expanded="false" aria-controls="accordion800">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How secure is opensource ?
                                                            </span>
                                                        </div>
                                                        <div id="accordion800" role="tabpanel" data-parent="#accordionWrapar6" aria-labelledby="heading87" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Icing sweet roll cotton candy brownie candy canes candy canes. Pie jelly dragée pie. Ice cream
                                                                jujubes wafer. Wafer croissant carrot cake wafer gummies gummies chupa chups halvah bonbon.

                                                                Gummi bears cotton candy jelly-o halvah. Macaroon apple pie dragée bonbon marzipan cheesecake.
                                                                Jelly jelly beans marshmallow.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading97" class="card-header" data-toggle="collapse" role="button" data-target="#accordion124" aria-expanded="false" aria-controls="accordion124">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How do I know about oldest version?
                                                            </span>
                                                        </div>
                                                        <div id="accordion124" role="tabpanel" data-parent="#accordionWrapar6" aria-labelledby="heading97" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                candy oat cake croissant halvah gummi bears toffee powder.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading102" class="card-header" data-toggle="collapse" role="button" data-target="#accordion141" aria-expanded="false" aria-controls="accordion141">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                Download offline sales doc
                                                            </span>
                                                        </div>
                                                        <div id="accordion141" role="tabpanel" data-parent="#accordionWrapar6" aria-labelledby="heading102" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                candy oat cake croissant halvah gummi bears toffee powder.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading112" class="card-header" data-toggle="collapse" role="button" data-target="#accordion96" aria-expanded="false" aria-controls="accordion96">
                                                            <span class=" collapse-title d-flex align-items-center"><i class="bx bxs-circle font-small-1"></i>
                                                                How secure personal data ?
                                                            </span>
                                                        </div>
                                                        <div id="accordion96" role="tabpanel" data-parent="#accordionWrapar6" aria-labelledby="heading112" class="collapse" aria-expanded="false">
                                                            <div class="card-body">
                                                                Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                                                                muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                                                                Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                                                                pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                                                                candy oat cake croissant halvah gummi bears toffee powder.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Accordion end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- swiper ends -->
                        </div>
                    </div>
                </section>
                <!-- faq ends -->

                <!-- fab bottom start -->
                <section class="faq-bottom">
                    <div class="row mb-2">
                        <div class="col-12 text-center">
                            <h2 class="faq-subtitle">You still have a question?</h2>
                            <p class="p-2 text-muted font-medium-1">If you cannot find a question in our FAQ, you can always contact us. We
                                will answer to you shortly!</p>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center mb-5">
                        <div class="col-sm-12 col-md-4 text-center border rounded p-2 mr-md-2 m-1">
                            <i class="bx bx-phone-call primary font-large-1 text-muted p-50"></i>
                            <h5>+ (810) 2548 2568</h5>
                            <p class="text-muted font-medium-1"> we are always happy to help!</p>
                        </div>
                        <div class="col-sm-12 col-md-4 text-center border color-gray-faq rounded p-2 m-1">
                            <i class="bx bx-mail-send primary font-large-1 p-50"></i>
                            <h5><a href="mailto:hello@help.com">hello@help.com</a></h5>
                            <p class="text-muted font-medium-1">Best way to get answer faster!</p>
                        </div>
                    </div>
                </section>
                <!-- fab bottom ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <!-- demo chat-->
    <div class="widget-chat-demo">
        <!-- widget chat demo footer button start -->
        <button class="btn btn-primary chat-demo-button glow px-1"><i class="livicon-evo" data-options="name: comments.svg; style: lines; size: 24px; strokeColor: #fff; autoPlay: true; repeat: loop;"></i></button>
        <!-- widget chat demo footer button ends -->
        <!-- widget chat demo start -->
        <div class="widget-chat widget-chat-demo d-none">
            <div class="card mb-0">
                <div class="card-header border-bottom p-0">
                    <div class="media m-75">
                        <a href="JavaScript:void(0);">
                            <div class="avatar mr-75">
                                <img src="../../../app-assets/images/portrait/small/avatar-s-2.jpg" alt="avtar images" width="32" height="32">
                                <span class="avatar-status-online"></span>
                            </div>
                        </a>
                        <div class="media-body">
                            <h6 class="media-heading mb-0 pt-25"><a href="javaScript:void(0);">Kiara Cruiser</a></h6>
                            <span class="text-muted font-small-3">Active</span>
                        </div>
                    </div>
                    <div class="heading-elements">
                        <i class="bx bx-x widget-chat-close float-right my-auto cursor-pointer"></i>
                    </div>
                </div>
                <div class="card-body widget-chat-container widget-chat-demo-scroll">
                    <div class="chat-content">
                        <div class="badge badge-pill badge-light-secondary my-1">today</div>
                        <div class="chat">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>How can we help? 😄</p>
                                    <span class="chat-time">7:45 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class="chat chat-left">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>Hey John, I am looking for the best admin template.</p>
                                    <p>Could you please help me to find it out? 🤔</p>
                                    <span class="chat-time">7:50 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class="chat">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>Stack admin is the responsive bootstrap 4 admin template.</p>
                                    <span class="chat-time">8:01 AM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-top p-1">
                    <form class="d-flex" onsubmit="widgetChatMessageDemo();" action="javascript:void(0);">
                        <input type="text" class="form-control chat-message-demo mr-75" placeholder="Type here...">
                        <button type="submit" class="btn btn-primary glow px-1"><i class="bx bx-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- widget chat demo ends -->

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-left d-inline-block">2021 &copy; PIXINVENT</span><span class="float-right d-sm-inline-block d-none">Crafted with<i class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js') }}"></script>
    <script src="{{ asset('app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js') }}"></script>
    <script src="{{ asset('app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/extensions/swiper.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/scripts/configs/vertical-menu-dark.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/components.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/footer.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/pages/faq.js') }}"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>