
<!DOCTYPE html>
<html>
<head>
    <title>Confirm transfer</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="{{ asset('client/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/style.css') }}">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- for preloader -->

    <script src="https://paxiumvirtual.com/user/bundles/js9f0f?v=yS_tQwJi_XS_xekEV0SfAWPLGUtjQilGA0rl1vnsLFI1"></script>

</head>
<body style="background-color: #003679; color: white;">

<!-- logo -->


<center>

    <div class="site-logo retina" >
        <a href="{{ route('user.dashboard') }}">
            <h3 style="font-weight: bolder; color: white">{{ env('APP_NAME') }}</h3>
{{--            <img  class="img-responsive" src="../assets/img/logo/logo_03.png" alt="logo">--}}
        </a>
    </div>

</center>

<!-- logo -->



<!-- nav bar -->



<div class="container-fluid">
    <div class="row">
        <!--     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pix" >
              <a href="../index.php"><img  src="img/nav.jpg"></a>

            </div>
       -->



        <!-- google translator -->
        <div class="text-center" style=" background-color: #eaeaec; width: 100%;">

            <!-- <div id="google_translate_element" ></div> -->

            <script type="text/javascript">
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                }
            </script>

            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


        </div>



        <!-- google translator end -->

    </div>
</div>


</div>
</div>




<div class="container">
    <div class="row">


        <div class="col-12">


            <div class="text-center mt-5" style="font-size: 20px; font-weight: 600"> TRANSFER CONFIRMATION</div>

            <style>
                #myProgress {
                    width: 100%;
                    background-color: #ddd;
                }

                #myBar {
                    width: 1%;
                    height: 30px;
                    background-color: #04AA6D;
                }
            </style>



            <div id="myProgress">
                <div id="myBar"></div>
            </div>

            <br>


            <script>
                var i = 0;
                function move() {
                    if (i == 0) {
                        i = 1;
                        var elem = document.getElementById("myBar");
                        var width = 1;
                        var id = setInterval(frame, 10);
                        function frame() {
                            if (width >= 100) {
                                clearInterval(id);
                                i = 0;
                            } else {
                                width++;
                                elem.style.width = width + "%";
                            }
                        }
                    }
                }
            </script>




            <div class="text-center mt-5" > You are about to transfer <label> USD</label>       <label> {{ $transfer->amount }}</label>
                <!--  <label> USD </label> -->
                to  <label> {{ $transfer->acct_number }}   </label>


                <br>

                A mail was sent to <label style="background-color: #1512124d; color: white; border-radius: 10px; padding: 5px 10px 10px 10px;
    font-weight: 600;"> {{ $transfer->user->email }}   </label>    follow the instruction to complete this transaction



            </div>






            <form class="text-center" action="{{ route('user.confirmOtp', $transfer->id) }}" method="post" enctype="multipart/form-data">
                @csrf

                <div style="color: red; font-weight:bold;">

                </div>

                <label class="mt-5"  style="font-weight: 600">Input your security token to complete your transaction!</label>
                <br>
                <input type="hidden" name="withdrawal_id" value="{{ $transfer->id }}">


                <input type="password"  required="" name="otp" title="Input the token number to complet transfer" placeholder="token" size="30" id="password-field" >

                <i toggle="#password-field" class="fa-regular fa-eye fa-fw field-icon toggle-password" style="color: gray; position: absolute; margin-left: -30px "></i>

                <input type="hidden" id="custId" name="success" value="successful">



                <div></div>



                <input onclick="move()" class="mt-5 mr-5" type="submit" name="submit" value="ok" style="width: 120px">

                <!-- <input class="mt-5" type="submit" name="" value="Cancel" style="width: 120px"> -->

                <br> <br>
                <hr>
                <a href="{{ route('user.dashboard') }}" class="btn btn-primary">Goto Dashboard</a>
                <script>




                    $(".toggle-password").click(function() {

                        $(this).toggleClass("fa-eye fa-eye-slash");
                        var input = $($(this).attr("toggle"));
                        if (input.attr("type") == "password") {
                            input.attr("type", "text");
                        } else {
                            input.attr("type", "password");
                        }
                    });

                </script>



                <script>
                    function myFunction() {
                        var x = document.getElementById("myInput");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }
                </script>


            </form>


        </div>


    </div>
</div>






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('js/jquery.js')}}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>


</body>
</html>

