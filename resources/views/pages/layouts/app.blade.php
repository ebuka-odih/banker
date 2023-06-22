<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Welcome to {{ env('APP_NAME') }} Bank, the bank  that has been serving the households, businesses and communities of America." />

    <meta property="og:image" content=”assets/img/logo/logo_01.png” />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--     <link rel="icon"  href="assets/img/logo/favicon.ico"> -->


    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title> HOME</title>
    <!--
    <iframe id="framed22" src="http://www.paxiumvirtual.com/" ></iframe>
     -->
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('style.css')}}">
    <style>
        #google_translate_element {

            color: transparent;
        }

        #google_translate_element a {

            display: none;
        }

        select.google_translate_element {

            color: black;
        }

        div.goog-te-gadget {

            color: transparent;

        }

        div.goog-te-gadget {
            color: transparent !important;
        }
        .goog-te-gadget .goog-te-combo {
            margin: 4px 0;
            height: 25px;
        }


    </style>

</head>

<body>


<!-- Preloader -->
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<!-- ##### Header Area Start ##### -->
<header class="header-area"  >
    <!-- Top Header Area -->
    <div class="top-header-area" style="background-color: #003679 !important">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 d-flex justify-content-between">
                    <!-- Logo Area -->
                    <div class="logo">
                        <a href="{{ route('index') }}">
                            <h3 style="font-weight: bolder; color: white">{{ env('APP_NAME') }}</h3>
{{--                            <img src="img/core-img/logo.png"  alt="">--}}
                        </a>
                    </div>

                    <!-- Top Contact Info -->
                    <div class="top-contact-info d-flex align-items-center">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Florida, USA "><img src="img/core-img/placeholder.png" alt=""> <span style="color: white;"></span></a>



                        <a href="mailto:support@lifepaytrust.com" data-toggle="tooltip" data-placement="bottom" title="info@lifepaytrust.com"><img src="img/core-img/message.png" alt=""> <span style="color: white;"></span></a>




{{--                        <a href="https://api.whatsapp.com/send?phone=+14808854369" data-toggle="tooltip" data-placement="bottom" title="Whatsapp"><img src="img/core-img/whats.png" alt=""> <span></span></a>--}}

                    </div>




                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="credit-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="creditNav">

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="#">Banking</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('creditcard') }}">Credit Card</a></li>
                                        <li><a href="{{ route('mortages') }}">Mortages</a></li>
                                        <li><a href="{{ route('investment') }}">Investment</a></li>
                                        <li><a href="{{ route('retirement') }}">Retirement</a></li>

                                    </ul>
                                </li>
                                <li><a href="{{ route('services') }}">Services</a></li>
                                <li><a href="{{ route('login') }}">Internet Banking</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('register') }}">Register</a></li>


                                    </ul>
                                </li>
                                <li><a href="{{ route('faq') }}">Faq</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                <li>





                                    <div id="google_translate_element" ></div>
                                    <script type="text/javascript">

                                        function googleTranslateElementInit() {
                                            new google.translate.TranslateElement({pageLanguage: "en"}, 'google_translate_element');
                                        }

                                        function changeLanguageByButtonClick() {
                                            var language = document.getElementById("language").value;
                                            var selectField = document.querySelector("#google_translate_element select");
                                            for(var i=0; i < selectField.children.length; i++){
                                                var option = selectField.children[i];
                                                // find desired langauge and change the former language of the hidden selection-field
                                                if(option.value==language){
                                                    selectField.selectedIndex = i;
                                                    // trigger change event afterwards to make google-lib translate this side
                                                    selectField.dispatchEvent(new Event('change'));
                                                    break;
                                                }
                                            }
                                        }
                                    </script>
                                    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


                                </li>

                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>

                    <!-- Contact -->
                    <div class="contact">
                        <a href="{{ route('login') }}"><img src="img/core-img/images.png" alt=""> Log-in now</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>    <!-- ##### Header Area End ##### -->


@yield('content')

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area section-padding-100-0">
    <div class="container">
        <div class="row">

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-100">
                    <h5 class="widget-title">About Us</h5>
                    <!-- Nav -->
                    <nav>
                        <ul>
                            <li><a href="{{ route('index') }}">Homepage</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('contact') }}">Contact us</a></li>

                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-100">
                    <h5 class="widget-title">Solutions</h5>
                    <!-- Nav -->
                    <nav>
                        <ul>
                            <li><a href="{{ route('services') }}">Services &amp; Offers</a></li>
                            <li><a href="{{ route('investment') }}">Investment</a></li>
                            <li><a href="{{ route('retirement') }}">Retirement</a></li>

                        </ul>
                    </nav>
                </div>
            </div>



            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-100">
                    <h5 class="widget-title">Banking</h5>
                    <!-- Nav -->
                    <nav>
                        <ul>
                            <li><a href="{{ route('creditcard') }}">Credit Cards</a></li>
                            <li><a href="{{ route('mortages') }}">Mortages</a></li>
                            <li><a href="{{ route('faq') }}">Financial Solutions</a></li>

                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-100">
                    <h5 class="widget-title">Internet Banking</h5>
                    <!-- Nav -->
                    <nav>
                        <ul>
                            <li><a href="{{ route('register') }}">Register</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <!-- <li><a href="./faq.php">Financial Solutions</a></li> -->

                        </ul>
                    </nav>
                </div>
            </div>


        </div>
    </div>

    <!-- Copywrite Area -->
    <div class="copywrite-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copywrite-content d-flex flex-wrap justify-content-between align-items-center">
                        <!-- Footer Logo -->
                        <a href="index-2.html" class="footer-logo"><img src="assets/img/logo/logo_03.png" style="" alt=""></a>

                        <!-- Copywrite Text -->
                        <p class="copywrite-text">
                            <a href="#">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved |  {{ env('APP_NAME') }} Bank
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>



<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
<!-- Popper js -->
<script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
<!-- All Plugins js -->
<script src="{{ asset('js/plugins/plugins.js') }}"></script>
<!-- Active js -->
<script src="{{ asset('js/active.js') }}"></script>

</body>


<!-- Mirrored from uniquebankuk.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Dec 2020 09:34:36 GMT -->
</html>
