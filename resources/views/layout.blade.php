<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        @yield('title')
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/img/favicon.ico')}}">

        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet"> 

        <!-- All CSS Files -->
        <!-- Bootstrap css -->
        <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
        <!--Icon Font--> 
        <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/pe-icon-7-stroke.css')}}">
        <!--Plugins css file--> 
        <link rel="stylesheet" href="{{asset('front/css/plugins.css')}}">
        <!--Theme main style--> 
        <link rel="stylesheet" href="{{asset('front/style.css')}}">
        <!--Responsive css--> 
        <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">

        <!--Modernizr JS--> 
        <script src="{{asset('front/js/vendor/modernizr-2.8.3.min.js')}}"></script>

        <!--Fonts-->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Cabin" />

        <style media="screen" type="text/css">
            @media (min-width: 992px) {
                .garis {
                    border-left: solid thick white;
                    border-right: solid thick white;
                }
                .blog-item .image {
                    padding-left: 0;
                    padding-right: 0;
                }
                .title{
                    color: black;
                    font-weight: bold;
                    font-size: 24px;
                }
                .title span.kecil{
                    color: black;
                    margin-left: 20px;
                    font-weight: 300;
                    font-size: 14px;
                }
            }
            @media (min-width: 768px) and (max-width: 992px) {
                .magazine-btn{
                    border-left: solid thick white; 
                }
                .meanmenu-reveal{
                    right: 150px!important;
                }
                .slidermini{
                    position: relative;
                    top: -88px;
                    left: 15px;
                }
                .product-slider .slick-arrow {
                    margin-top: -60px!important;
                }
                .blog-item {
                    margin-top: 0px!important;
                }
                .blog-item .image {
                    height: 184px!important;
                }
                .blog-item .image img {
                    width: 100%;
                    height: 100%;
                }
                .text-center-sm {
                    text-align: center;
                }
                .title{
                    color: black;
                    font-weight: bold;
                    font-size: 16px;
                }
                .title span.kecil{
                    color: black;
                    margin-left: 20px;
                    font-weight: 300;
                    font-size: 10px;
                }
            }
            @media (max-width: 768px) {
                .magazine-btn{
                    border-left: solid thick white; 
                }
                .meanmenu-reveal{
                    right: 100px!important;
                    top: -65px!important;
                }
                .slidermini{
                    position: relative;
                    top: -88px;
                    left: 15px;
                }
                .product-slider .slick-arrow {
                    margin-top: -60px!important;
                }
                .blog-item {
                    margin-top: 0px!important;
                }
                .blog-item .image {
                    height: 184px!important;
                }
                .blog-item .image img {
                    width: 100%;
                    height: 100%;
                }
                .text-center-xs {
                    text-align: center;
                }
                .title{
                    color: black;
                    font-weight: bold;
                    font-size: 16px;
                }
                .title span.kecil{
                    color: black;
                    margin-left: 20px;
                    font-weight: 300;
                    font-size: 10px;
                }
            }
            .container{
                padding-left: 2%;
                padding-right: 2%;
                width: 96%;
            }
            .breadcrumb{
                background-color: white;
                padding: 0;
                margin-bottom: 12px;
                font-family: Roboto;
                font-style: italic;
            }
            .breadcrumb > .active{
                color: black;
                font-weight: bold;
            }           

            .bg-putih {
                background-color: white;
            }
            .bg-hitam {
                background-color: black;
            }
            .bg-pink {
                background-color: #e0c4cc;
            }
            .bg-abuabu {
                background-color: #d1d2d3;
            }
            .bg-smoke {
                background-color: whitesmoke;
            }
            .warnadasar {
                background-color: #E5C773;
            }
            ul.warnaputih li a,ul.warnaputih li ul li a{                
                color: white;
                font-family: Cabin;
                font-weight: bold;
                font-size: 12px;
            }
            ul.sub-menu {
                background-color: lightgray;
            }
            ul.mega-menu {
                background-color: lightgray;
            }
            .header-section.stick{
                background-color: #E5C773;
            }
            ul.menu-bawah{
                display: inline-block;
            }
            ul.menu-bawah > li
            {
                display: inline-block;
                list-style-type: none;
                padding-right: 20px;
                float: left;
                color: white
            }
            .main-menu > ul > li {
                display: block;
                float: left;
                margin: 19px 25px -19px 25px;
            }
            .blog-item .image {
                height: 220px;
            }
            .blog-item .image img {
                width: 100%;
                height: 100%;
            }


            /*            ul li a {
                            font-family: Cabin;
                            font-weight: bold;
                            font-size: 12pt;
                        }*/
            //paddding
            .pl-0 {
                padding-left: 0;
            }
            .pl-10{
                padding-left: 10px;
            }
            .pl-15{
                padding-left: 15px;
            }
            .pr-0 {
                padding-right: 0;
            }
            .pr-10{
                padding-right: 10px;
            }
            .pr-15{
                padding-right: 15px;
            }
            no-padding{
                padding-left: 0;
                padding-right: 0;
            }

            //font
            .text-cabin{
                font-family: Cabin;
            }
            .text-roboto{
                font-family: Roboto;
            }
            .text-18{
                font-size: 18px;
            }
            .text-17{
                font-size: 17px;
            }
            .text-16{
                font-size: 16px;
            }
            .text-15{
                font-size: 15px;
            }
            .text-14{
                font-size: 14px;
            }
            .text-13{
                font-size: 13px;
            }
            .text-12{
                font-size: 12px;
            }
            .text-11{
                font-size: 11px;
            }
            .text-10{
                font-size: 10px;
            }


            .item-per-page select{
                -moz-appearance: none;
                background: #d1d2d3 url("{{asset('front/image/va-dropdown.png')}}") no-repeat scroll right center;
                border: 1px solid #ddd;
                color: #666;
                font-size: 12px;
                height: 36px;
                padding: 0 30px 0 10px;
                /*width: 160px;*/
            }




        </style>
        @yield('css')
    </head>

    <body>

        <!-- Body main wrapper start -->
        <div class="wrapper">

            <!-- START HEADER SECTION -->
            <header class="header-section section sticker warnadasar">
                <div class="container">
                    <div class="row">
                        <!-- logo -->
                        <div class="col-md-2 col-sm-6 col-xs-6">
                            <div class="header-logo" style="padding-top: 30px;padding-bottom: 19px">
                                <a href="index.html"><img src="{{asset('front/img/header.png')}}" height="51" width="143" alt="main logo"></a>
                            </div>
                        </div>
                        <!-- header-search & total-cart -->
                        <div class="col-md-1 col-sm-2 col-xs-2 float-right magazine-btn" style="padding-left: 0;padding-right: 0">
                            <div class="text-right" style="padding-top: 27px;padding-bottom: 19px">
                                <a href="index.html"><img src="{{asset('front/image/va-magazine-icon.png')}}" height="54" width="86" alt="main logo"></a>
                            </div>
                        </div>
                        <!-- primary-menu -->
                        <div class="col-md-9 col-xs-12">
                            <nav class="main-menu text-left garis">
                                <ul class="warnaputih" style="padding-left: 25px">
                                    <li><a href="index.html">Brands & Showrooms</a>
                                        <ul class="sub-menu">
                                            <li class="active"><a href="index.html">Brands</a></li>
                                            <li class="active"><a href="index.html">Showrooms</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">Products & Works</a>
                                        <ul class="mega-menu ">
                                            <li><a href="#">By Type</a>
                                                <ul>
                                                    <li><a href="#">Home Furniture</a></li>
                                                    <li><a href="#">Interior Accessories</a></li>
                                                    <li><a href="#">Lighting</a></li>
                                                    <li><a href="#">Tableware</a></li>
                                                    <li><a href="#">Local Crafts</a></li>
                                                    <li><a href="#">Tiles & Floorings</a></li>
                                                    <li><a href="#">Storage</a></li>
                                                    <li><a href="#">Kitchen</a></li>
                                                    <li><a href="#">Bathroom</a></li>
                                                    <li><a href="#">Furnishing</a></li>
                                                    <li><a href="#">Kids</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">By Material</a>
                                                <ul>
                                                    <li><a href="#">Metal</a></li>
                                                    <li><a href="#">Textile</a></li>
                                                    <li><a href="#">Wood</a></li>
                                                    <li><a href="#">Plastic</a></li>
                                                    <li><a href="#">Stone & Marble</a></li>
                                                    <li><a href="#">Rattan</a></li>
                                                    <li><a href="#">Bamboo</a></li>
                                                    <li><a href="#">Leather</a></li>
                                                    <li><a href="#">All</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-list.html">Sign Up / Login</a></li>
                                </ul>
                            </nav>
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER SECTION -->

            @yield('content')

            <div class="footer-top-section section pb-60 pt-20" style="background-color: white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <hr style="color: #e0c4cc;height: 5px;display: block;background: #e0c4cc;border: 0">
                            <div class="row">
                                <div class="col-md-2 col-sm-6 col-xs-6">
                                    <ul>
                                        <li>ABOUT</li>
                                    </ul>

                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <ul>
                                        <li>100+</li>
                                        <li>SIMPUL GROUP</li>
                                        <li>JOBS</li>
                                    </ul>
                                </div>
                                <div class="col-md-2 col-sm-6 col-xs-6">
                                    <ul>
                                        <li>PARTNERING</li>
                                        <li>WITH 100+</li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <ul>
                                        <li>FOR SHOWROOM & BRANDS</li>
                                        <li>FOR BUYERS</li>
                                        <li>FOR DESIGNERS</li>
                                        <li>FOR MEDIA</li>
                                        <li>FOR ASSOCIATION</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <hr style="color: #e0c4cc;height: 5px;display: block;background: #e0c4cc;border: 0">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <ul>
                                        <li>FAQ</li>
                                        <li>CONTACT US</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="footer-social fix pull-right">
                                        <a href="#" style="color: black"><i class="fa fa-facebook"></i></a>
                                        <a href="#" style="color: black"><i class="fa fa-instagram"></i></a>
                                        <a href="#" style="color: black"><i class="fa fa-rss"></i></a>
                                        <a href="#" style="color: black"><i class="fa fa-twitter"></i></a>
                                        <a href="#" style="color: black"><i class="fa fa-pinterest"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FOOTER BOTTOM SECTION START -->
            <div class="footer-bottom-section section pb-20 pt-20 warnadasar no-border">
                <div class="container">
                    <div class="row">
                        <!-- Copyright -->
                        <div class="copyright text-left col-sm-1 col-xs-1">
                            <img src="{{asset('front/image/va-logo-100-top.png')}}" alt="main logo">
                        </div>
                        <div class="text-left col-sm-10 col-xs-10">
                            <ul class="menu-bawah">
                                <li>&copy; 2017</li>
                                <li>Term of Use</li>
                                <li>Privacy</li>
                                <li>Security</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER BOTTOM SECTION END -->  



    </div>
    <!-- Body main wrapper end -->


    <!-- Placed JS at the end of the document so the pages load faster -->

    <!-- jQuery latest version -->
    <script src="{{asset('front/js/vendor/jquery-3.1.1.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('front/js/plugins.js')}}"></script>
    <!-- Ajax Mail js -->
    <script src="{{asset('front/js/ajax-mail.js')}}"></script>
    <!-- Main js -->
    <script src="{{asset('front/js/main.js')}}"></script>

    @yield('js')

</body>

</html>