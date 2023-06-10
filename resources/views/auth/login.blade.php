
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Login</title>

    <!-- including stylesheets -->
    <link rel="stylesheet" href="{{ asset('custom/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('custom/css/core.css') }}">
    <link rel="stylesheet" href="{{ asset('custom/css/theme.css')}}">
    <!-- including layerslider stylesheets -->

    <link rel="icon" href="images/favicon.ico">


    <link rel="stylesheet" href="{{ asset('custom/css/layerslider.css') }}">
    <link rel="stylesheet" href="{{ asset('custom/css/skin.css')}}">
    <!-- including colorpicker stylesheets -->
    <link href="{{ asset('custom/css/colorpicker.css') }}" rel="stylesheet" type="text/css">
    <!-- Signup links -->
    <link href="{{ asset('custom/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('custom/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('custom/css/main.css') }}" rel="stylesheet" media="all">




</head>
<body>

    <div class="site-wrapper" >


        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            }
        </script>

        <script type="text/javascript" src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



        <!--end google translator -->


        <header class="site-header" >


            <div class="nav-wrap" style="background-color:#003679;">
                <div class="container" >
                    <div class="site-logo retina">
                        <a href="../index-2.html">
                            <img class="img-responsive" src="images/logo.png" alt="logo">
                        </a>
                    </div>
                    <button class="navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <nav class="site-navigation">
                        <ul>
                            <li ><a href="index.html" target="_blank" style="color:#838383;"> {{ env('APP_NAME') }}</a></li>
                            <li><a href="../index-2.html" style="color:#838383;">Online Banking Home</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </header>
        <!-- layer slider -->

        <div class="sliderpart12">

            <div class="sliderpart">
                <div id="layerslider" style="width: 100%; height: 542px;">
                    <!-- first slide -->


                    <!-- third slide -->
                    <div class="ls-slide">
                        <!-- slide background -->
                        <img src="{{ asset('images/slider1.jpg') }}" class="ls-bg" alt="Slide background">
                        <!-- slide contents goes here -->
                        <h1 class="ls-l primary upper" style="top: 185px; left: 30px; font-size: 40px; line-height: 1em; color:#003679;">Our Client</h1>
                        <h2 class="ls-l" style="top: 258px; left: 30px; font-size: 30px; color:#003679;">More Valuable Than Money</h2>
                        <div class="ls-l" style="top: 320px; left: 30px; width: 600px;">
                            <!--    	<a id="show-signup" class="btn btn-md">Start Now</a> -->
                            <a  href="createaccount.html" class="btn btn-md">Start Now</a>

                        </div>
                    </div>
                    <!-- third slide -->
                    <div class="ls-slide">
                        <!-- slide background -->
                        <img src="{{ asset('images/slider2.jpg') }}" class="ls-bg" alt="Slide background">
                        <!-- slide contents goes here -->
                        <h1 class="ls-l primary upper" style="top: 185px; left: 30px; font-size: 40px; line-height: 1em; color:#003679;">Global Transaction Banking</h1>
                        <h2 class="ls-l" style="top: 258px; left: 30px; font-size: 30px; color:#003679;">{{ env('APP_NAME') }}</h2>
                        <div class="ls-l" style="top: 320px; left: 30px; width: 600px;">
                            <a  href="createaccount.html" class="btn btn-md">Start Now</a>
                            <!--                        <a id="show-signup" class="btn btn-md">Start Now</a> -->

                        </div>
                    </div>
                </div>
            </div>

            <div class="homeform">
                <h3>Log in to Access your Account</h3>
                <p>Enter Your Account Login Details to proceed</p>
                <div class="coustologin">
                    <div class="custmoheading">
                        <h4> Customer Login </h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <div class="customlogo" id="showafterpasswordimage"></div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7">





                            <form class="login" enctype="multipart/form-data" action="{{ route('login') }}" method="post">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li style="color: #e86363">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="custmofild" id="levelhigh1">
                                    <label>Email :</label>
                                    <input value="" placeholder="Enter email" type="text" name="email" required="">

                                </div>

                                <div class="custmofild" id="levelhigh1">
                                    <label>Password :</label>
                                    <input value="" placeholder="Enter Password" type="password" name="password" required="">
                                    <input class="loginbutt" value="Login Now" type="submit" name="submit">
                                </div>

                                <img src="pageloader.gif" style="width:100px;height:100px;display:none;" id="meloaderidxx">

                            </form>
                            <div class="custmofild" id="levelhigh2" style="display:none;">
                                <label>Password :</label>
                                <input value="" placeholder="Enter Your Password" type="password" id="userpasswordid">
                            </div>


                        </div>
                    </div>
                    <p>
                        Forgot your password/PIN?
                        <a href="forgot.html"> Retrive your password/PIN using Email. </a>
                    </p>
                    <br>
                    <p >
                        Open {{ env('APP_NAME') }} Account       <a style="color: #003679; background-color: yellow !important;" href="createaccount.html" class="btn btn-md">Create Account Now</a>


                    </p>
                    <br>
                </div>
            </div>


        </div>
    </div>

    <footer class="site-footer">
        <div class="copyright-footer text-center">
            <div class="container">
                <div class="row">
                    Copyright © 2021 All rights reserved | paxium Bank
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/tab.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
    <script src="{{ asset('js/alert.js') }}"></script>
    <script src="{{ asset('js/smoothscroll.js') }}"></script>
    <!-- including layerslider scripts -->
    <script src="{{ asset('js/greensock.js') }}"></script>

    <script src="{{ asset('js/layerslider.transitions.js') }}"></script>
    <script src="{{ asset('js/layerslider.kreaturamedia.jquery.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#layerslider').layerSlider({
                skin 				: 'altus',
                skinsPath 			: 'css/skins/',
                responsiveUnder		: 1200,
                layersContainer 	: 1200,
                responsive 			: false,
                showCircleTimer 	: false,
                thumbnailNavigation : 'disabled',
                navStartStop		: false,
            });
        });
    </script>


<script src="{{ asset('custom/vendor/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('custom/vendor/bootstrap-wizard/bootstrap.min.js') }}"></script>
<script src="{{ asset('custom/vendor/bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
<script src="{{ asset('code.jquery.com/ui/1.12.0/jquery-ui.min.html') }}" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="crossorigin="anonymous"></script>
<script src="{{ asset('custom/js/global.js') }}"></script>

</body>
</html>
