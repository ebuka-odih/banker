
<!DOCTYPE html>
<html>
<title>DASHBOARD</title>

<!-- for preloader -->
<link rel="stylesheet" href="{{ asset('client/css/style.css') }}">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('client/css/w3.css') }}">

<!-- font awesome for fa -->

<link href="{{ asset('vendor/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

<!-- another font awesome fas -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link href="{{ asset('client/css/all.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{ asset('client/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('client/css/style.css') }}">
<script type="text/javascript" src="{{ asset('client/js/jquery-2.1.1.min.js') }}"></script>
<!-- for preloader -->
<script src="bundles/js9f0f?v=yS_tQwJi_XS_xekEV0SfAWPLGUtjQilGA0rl1vnsLFI1"></script>


<!-- Resources  chart    -->
<script src="{{ asset('client/js/core.js') }}"></script>
<script src="{{ asset('client/js/charts.js') }}"></script>
<script src="{{ asset('client/js/animated.js') }}"></script>
<!-- Chart code  -->

<style>
    html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

    /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 800px) {
        .accountnumber {


            font-size: 1.5em;
        }

        .mainimg{
            background-color: white;
        }

        .availablebalance{
            margin-top: -25px!important;
            font-size: 0.9em;

        }
    }



    .availablebalance h3 .dropaza {
        color: #3766b2;

        text-decoration-line: none;
    }

    .availablebalance h3 .dropaza:hover {
        color: #3766b2!important;
        text-decoration-line: none;
        font-weight: lighter;
    }




</style>


<!-- Favicon -->
<link rel="icon" href="../img/core-img/favicon.ico">

<script src="bundles/js9f0f?v=yS_tQwJi_XS_xekEV0SfAWPLGUtjQilGA0rl1vnsLFI1"></script>


</head>




<body  style="background-color: #0e2072">


<!-- pre loader -->

<div class="page-loader">
    <div class="loader">Loading...</div>
</div>


<script type="text/javascript">
    window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/www.flcbmtg.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.2.3"}};
    !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
</script>


<style type="text/css">.n2-ss-spinner-simple-white-container {
        position: absolute;
        top: 50%;
        left: 50%;
        margin: -20px;
        background: #fff;
        width: 20px;
        height: 20px;
        padding: 10px;
        border-radius: 50%;
        z-index: 1000;
    }

    .n2-ss-spinner-simple-white {
        outline: 1px solid RGBA(0,0,0,0);
        width:100%;
        height: 100%;
    }

    .n2-ss-spinner-simple-white:before {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 20px;
        height: 20px;
        margin-top: -11px;
        margin-left: -11px;
    }

    .n2-ss-spinner-simple-white:not(:required):before {
        content: '';
        border-radius: 50%;
        border-top: 2px solid #333;
        border-right: 2px solid transparent;
        animation: n2SimpleWhite .6s linear infinite;
    }
    @keyframes n2SimpleWhite {
        to {transform: rotate(360deg);}
    }
</style>
<script type='text/javascript' src='wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>

<script type='text/javascript' src='wp-content/plugins/cookie-law-info/public/js/cookie-law-info-publicc245.js?ver=1.8.1'></script>
<script type='text/javascript' src='wp-content/themes/flcbmtg/js/bootstrap.min8a54.js?ver=1.0.0'></script>
<script type='text/javascript' src='wp-content/themes/flcbmtg/js/themenav.min8a54.js?ver=1.0.0'></script>
<script type='text/javascript' src='wp-content/themes/flcbmtg/js/themejs8a54.js?ver=1.0.0'></script>
<link rel='https://api.w.org/' href='wp-json/index.html' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 5.2.3" />
<link rel='shortlink' href='#' />
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embeddc24.html?url=https%3A%2F%2Fwww.flcbmtg.com%2F" />
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed82a2.html?url=https%3A%2F%2Fwww.flcbmtg.com%2F&amp;format=xml" />
<script type="text/javascript">
    var cli_flush_cach
    e=1;
</script>

<!-- Top container -->
<div class="w3-bar w3-large" style="z-index:4; background-color: #193e8f!important;" >




    <!-- logo -->


    <center>

        <div class="site-logo retina "  >
            <a href="../index.php">
                <img  class="img-responsive" src="../assets/img/logo/logo_03.png" alt="logo">
            </a>
        </div>

    </center>

    <!-- logo -->




    <button style="color: white" class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>

    <span class="w3-bar-item w3-right">



  </span>



    <span class="w3-bar-item w3-right">






  </span>









    <!-- google translator -->


    <center>





        <!-- google translator -->


        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            }
        </script>

        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>




</div>



</center>


<!-- google translator end -->

</div>


<!-- Sidebar/menu -->
<nav class="w3-sidebar table w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px; background-color: white!important; border: 2px solid gray;
  border-radius: 25px;  "  id="mySidebar"><br>
    <div class="w3-container w3-row">
        <div class="w3-col s4">

            <img src="{{ auth()->user()->avatar }}" class="w3-circle w3-margin-right" width="50px" height="50px">

            <br>


            <script type="text/javascript">
                $(document).ready(function() {




// online






                    (function () {
                        var displayOnlineStatus = document.getElementById("online-status");
                        console.log("in start funct");
                        var displayLEDStatus = document.getElementById("online-led"),
                            isOnline = function () {
                                displayOnlineStatus.innerHTML = "Online";
                                //displayOnlineStatus.className = "online";
                                displayLEDStatus.className = "led-green";
                            },
                            isOffline = function () {
                                displayOnlineStatus.innerHTML = "Offline";
                                //displayOnlineStatus.className = "offline";
                                displayLEDStatus.className = "led-red-on";
                            };

                        if (window.addEventListener) {
                            /*
                                Works well in Firefox and Opera with the
                                Work Offline option in the File menu.
                                Pulling the ethernet cable doesn't seem to trigger it.
                                Later Google Chrome and Safari seem to trigger it well
                            */
                            window.addEventListener("online", isOnline, false);
                            window.addEventListener("offline", isOffline, false);
                        }
                        else {
                            /*
                              Works in IE with the Work Offline option in the
                              File menu and pulling the ethernet cable
                            */
                            document.body.ononline = isOnline;
                            document.body.onoffline = isOffline;
                        }
                    })();





                });


            </script>
            <div id="time"></div>


            <style type="text/css">



                .led-red-on {
                    margin: 20px auto;
                    width: 12px;
                    height: 12px;
                    background-color: #f90;
                    border-radius: 50%;
                    box-shadow: #000 0 -1px 7px 1px, inset #600 0 -1px 9px, #F00 0 2px 12px;
                }

                .led-red-off {
                    margin: 20px auto;
                    width: 12px;
                    height: 12px;
                    background-color: #400;
                    border-radius: 50%;
                    box-shadow: #000 0 -1px 7px 1px, inset #600 0 -1px 9px, #F00 0 2px 12px;
                }



                div#online-status {
                    color: black;
                    position: relative;
                    padding: 10px;
                }







                .led-yellow {
                    margin: 20px auto;
                    width: 12px;
                    height: 12px;
                    background-color: #A90;
                    border-radius: 50%;
                    box-shadow: #000 0 -1px 7px 1px, inset #660 0 -1px 9px, #DD0 0 2px 12px;
                }

                .led-green {
                    margin: 20px auto;
                    width: 12px;
                    height: 12px;
                    background-color: #690;
                    border-radius: 50%;
                    box-shadow: #000 0 -1px 7px 1px, inset #460 0 -1px 9px, #7D0 0 2px 12px;
                }

                .led-blue {
                    margin: 20px auto;
                    width: 12px;
                    height: 12px;
                    background-color: #4AB;
                    border-radius: 50%;
                    box-shadow: #000 0 -1px 7px 1px, inset #006 0 -1px 9px, #06F 0 2px 14px;
                }



            </style>

        </div>
        <div class="w3-col s8 w3-bar">


            <div style="display: inline-block;">

                <div  id="online-status">online</div>

                <div style="margin-top: 0px;"  id="online-led" class="led-red-on"></div>
                <!-- <div class="led-yellow"></div>
                <div class="led-green"></div>
                <div class="led-blue"></div> -->


            </div>


            <div>
                {{ date('y-M-d', strtotime(\Carbon\Carbon::now())) }}
            </div>


            <br>


{{--            <div style="font-weight: 600; font-size: 10px; display: inline-block;" class="ip">--}}
{{--                IP ADDRESS:--}}

{{--                136.144.17.171--}}
{{--            </div>--}}
{{--            --}}

        </div>






    </div>
    <hr>
    <div class="w3-container ">

    </div>
    <div class="w3-bar-block sidenavtop" style="font-weight:500; font-size: 14px;">
        <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
        <a href="{{ route('user.dashboard') }}" class="w3-bar-item w3-button w3-padding " style="background-color: #ffbb38 "><i class="fa fa-users fa-fw"></i>  Dashboard</a>
        <a href="{{ route('user.userDetails') }}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  User Detail</a>
        <a href="statement.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  History</a>
        <a href="{{ route('user.transfer') }}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  Transfer</a>
        <a href="credit_card.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-credit-card"></i>  Credit Card</a>
        <a href="changepass.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Change pin</a>
        <a href="logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-window-close"></i>  log out</a><br><br>
    </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">



    <!-- Header -->
    <header class="w3-container" style="padding-top:22px">
        <!--  -->




        </b></h4>
    </header>

    <style type="text/css">


        .myawesome i{

            opacity: 0.20;                /* Opacity (Transparency) */
            /* color: rgba(0, 0, 0, 0.75);*/   /* RGBA Color (Alternative Transparency) */
            -webkit-filter: blur(2px);    /* Blur */
            -moz-filter: blur(2px);
            filter: blur(2px);


        }


        .myawesome h6, .myawesome h5 {


            font-weight: 600;

        }


    </style>




    <style type="text/css">
        .mra{

        }
        .mra:hover{
            opacity: 0.8;
        }


    </style>




@yield('content')



    <div class="w3-panel">
        <div class="w3-row-padding" style="margin:0 -16px">
            <p></p>



            <!-- Styles -->
            <style>
                #chartdiv {
                    width: 100%;
                    height: 700px;
                    font-size: 8pt
                }
            </style>


            <!--  </div> -->
            <hr>


            <!-- Footer -->
            <footer class="w3-container w3-padding-16 " style="background-color: #193e8f; color: white">
                <h4>




                    <div class="container-fluid"  >

                        <div class="row mt-5">




                            <div class="col-xl-9 col-lg-9 col-md-7 col-sm-12 col-12  ">


                                <p style="font-size: 12px">
                                    Copyright &copy;
                                    <!-- date starts -->   <label id="date"></label>
                                    All rights reserved | Paxium Virtual Bank </p>

                                <script>
                                    var d = new Date();
                                    document.getElementById("date").innerHTML = d.getFullYear();
                                </script>

                                <!-- date ends -->

                            </div>






                            <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12 ">
                                <!-- EXCHANGERATES.ORG.UK LIVE CURRENCY RATES TICKER START -->
                                <!-- <iframe src="//www.exchangerates.org.uk/widget/ER-LRTICKER.php?w=300&s=1&mc=GBP&mbg=FFFFFF&bs=no&bc=000044&f=verdana&fs=10px&fc=000044&lc=000044&lhc=FE9A00&vc=FE9A00&vcu=008000&vcd=FF0000&" width="250" height="30" frameborder="0" scrolling="no" marginwidth="0" marginheight="0"></iframe> -->
                                <!-- EXCHANGERATES.ORG.UK LIVE CURRENCY RATES TICKER END -->

                            </div>

                        </div>
                    </div>


                </h4>


                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


            </footer>


            <!-- End page content -->
        </div>



        <!-- for preloader -->

        <script src="{{ asset('client/js/main.js') }}"></script>


        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('client/js/jquery.min.js') }}"></script>
        <script src="{{ asset('client/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('client/js/jquery.easing.min.js') }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('client/js/sb-admin-2.min.js') }}"></script>

        <script>
            // Get the Sidebar
            var mySidebar = document.getElementById("mySidebar");

            // Get the DIV with overlay effect
            var overlayBg = document.getElementById("myOverlay");

            // Toggle between showing and hiding the sidebar, and add overlay effect
            function w3_open() {
                if (mySidebar.style.display === 'block') {
                    mySidebar.style.display = 'none';
                    overlayBg.style.display = "none";
                } else {
                    mySidebar.style.display = 'block';
                    overlayBg.style.display = "block";
                }
            }

            // Close the sidebar with the close button
            function w3_close() {
                mySidebar.style.display = "none";
                overlayBg.style.display = "none";
            }
        </script>

</body>
</html>

