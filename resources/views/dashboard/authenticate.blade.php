
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Login</title>


    <!-- for preloader -->
    <link rel="stylesheet" href="../user/css/style.css">

    <!-- including stylesheets -->
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




    <!-- for preloader -->
    <script src="../user/bundles/js9f0f?v=yS_tQwJi_XS_xekEV0SfAWPLGUtjQilGA0rl1vnsLFI1"></script>


</head>
<body>


<!-- pre loader -->

<div class="page-loader">
    <div class="loader">Loading...</div>
</div>



<div class="site-wrapper">
    <header class="site-header">


        <div class="nav-wrap" style="background-color:#003679;">
            <div class="container" >
                <div class="site-logo retina">
                    <a href="../index.php">
                        <img class="img-responsive" src="images/logo.png" alt="../index.php">
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
                        <li ><a href="index.php" target="_blank" style="color:#838383;"> {{ env('APP_NAME') }}





                            </a></li>
                        <li><a href="../index.php" style="color:#838383;">Online Banking Home</a></li>
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
                        <a href=""  class="btn btn-md">Start Now</a>

                    </div>
                </div>
                <!-- third slide -->
                <div class="ls-slide">
                    <!-- slide background -->
                    <img src="{{ asset('images/slider2.jpg') }}" class="ls-bg" alt="Slide background">
                    <!-- slide contents goes here -->
                    <h1 class="ls-l primary upper" style="top: 185px; left: 30px; font-size: 40px; line-height: 1em; color:#003679;">Global Transaction Banking</h1>
                    <h2 class="ls-l" style="top: 258px; left: 30px; font-size: 30px; color:#003679;">StarFund Bank




                    </h2>
                    <div class="ls-l" style="top: 320px; left: 30px; width: 600px;">
                        <a href=""  class="btn btn-md">Start Now</a>

                    </div>
                </div>
            </div>
        </div>

        <div class="homeform">
            <h3>Log in to Access your Account</h3>
            <p>Enter Your PIN Number to proceed</p>
            <div class="coustologin">
                <div class="custmoheading">
                    <h4> Customer Login </h4>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <div class="customlogo" id="showafterpasswordimage">

                            <img src="{{ auth()->user()->avatar }}">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7">


                        <form class="login" enctype="multipart/form-data" action="{{ route('user.authenticated') }}" method="post">
                            @csrf
                            @if(session()->has('declined'))
                                <div class="alert alert-success" style="color: #e86363">
                                    {{ session()->get('declined') }}
                                </div>
                            @endif
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

                                <label>PIN Number:</label>
                                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                <input value="" placeholder="Enter your PIN" type="text" name="pin" required="">
                                <input class="loginbutt" value="Validate PIN" type="submit" name="submit">
                            </div>

                        </form>
                        <img src="pageloader.gif" style="width:100px;height:100px;display:none;" id="meloaderidxx">
                        <div class="custmofild" id="levelhigh2" style="display:none;">
                            <label>Password :</label>
                            <input value="" placeholder="" type="password" id="userpasswordid">
                            <input class="loginbutt" value="Validate Password" type="button" id="firststepbutton2">
                        </div>
                        <div class="custmofild" id="levelhigh3" style="display:none;">
                            <label>PIN Number :</label>
                            <input value="" placeholder="" type="password" id="userpinnumber">
                            <input class="loginbutt" value="Validate PIN" type="button" id="firststepbutton3">
                        </div>
                    </div>
                </div>
                <p>
                    Forgot your password/PIN?
                    <a href="forgot.php"> Retrive your password/PIN using Email. </a>
                </p>
                <br>

                <br>
            </div>
        </div>


        <!--
          <div class="row">
              <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12"></div>
              <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                  <div class="wrapper wrapper--w69" id="signup-form" style="display:none;padding:10px 15px;">
                      <div class="card card-1" style="border-radius:1px;">
                          <div class="card-body">
                              <form class="wizard-container" method="POST" id="js-wizard-form" enctype="multipart/form-data">
                                  <div class="progress" id="js-progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                          <span class="progress-val"> Step 1 of 3 &nbsp;&nbsp;&nbsp; 40% Complete</span>
                                      </div>
                                  </div>
                                  <ul class="nav nav-tab">
                                      <li class="active">
                                          <a href="#tab1" data-toggle="tab">1</a>
                                      </li>
                                      <li>
                                          <a href="#tab2" data-toggle="tab">2</a>
                                      </li>
                                      <li>
                                          <a href="#tab3" data-toggle="tab">3</a>
                                      </li>
                                  </ul>
                                  <div class="tab-content">
                                      <div class="tab-pane active" id="tab1">
                                          <div class="input-group">
                                              <label class="label">First name*:</label>
                                              <input class="input--style-1" type="text" name="ufname" required placeholder="ex: Taylor">
                                          </div>
                                          <div class="input-group">
                                              <label class="label">Last name*:</label>
                                              <input class="input--style-1" type="text" name="ulastname" required placeholder="ex: Fuller">
                                          </div>
                                          <div class="input-group">
                                              <label class="label">Username*:</label>
                                              <input class="input--style-1" type="text" name="uuserid" required placeholder="ex: Taylorfuller">
                                          </div>
                                          <div class="input-group">
                                              <label class="label">Email*:</label>
                                              <input class="input--style-1" type="email" name="emailid" required placeholder="ex: example@email.com">
                                          </div>
                                          <div class="input-group">
                                              <label class="label">Gender*:</label>
                                              <select class="input--style-1" name="ugender" required>
                                                  <option value="">Choose gender</option>
                                                  <option>Male</option>
                                                  <option>Female</option>
                                              </select>
                                          </div>
                                          <div class="btn-next-con">
                                              <a class="btn-next" href="#">Next</a>
                                          </div>
                                      </div>
                                      <div class="tab-pane" id="tab2">
                                          <div class="input-group">
                                              <label class="label">Date of birth:</label>
                                              <input class="input--style-1" type="date" required name="dateofbirth">
                                          </div>
                                          <div class="input-group">
                                              <label class="label">Phone number:</label>
                                              <input class="input--style-1" type="text" required name="phonenumber">
                                          </div>
                                          <div class="input-group">
                                              <label class="label">Address:</label>
                                              <input class="input--style-1" type="text" required name="uaddress" placeholder="ex: Philadelphia Avenue">
                                          </div>
                                          <div class="input-group">
                                              <label class="label">City:</label>
                                              <input class="input--style-1" type="text" required name="ucityname" placeholder="ex: Las Vegas">
                                          </div>
                                          <div class="input-group">
                                              <label class="label">State:</label>
                                              <input class="input--style-1" type="text" required name="ustate" placeholder="ex: Los Angeles">
                                          </div>

                                          <div class="btn-next-con">
                                              <a class="btn-back" href="#">back</a>
                                              <a class="btn-next" href="#">Next</a>
                                          </div>
                                      </div>
                                      <div class="tab-pane" id="tab3">
                                          <div class="input-group">
                                              <label class="label">Zip code:</label>
                                              <input class="input--style-1" type="text" name="zipcode" required>
                                          </div>
                                          <div class="input-group">
                                              <label class="label">Account type*:</label>
                                              <select class="input--style-1" name="uaccounttype" required>
                                                  <option value="">Choose Account Type</option>
                                                  <option value="Checking Account">Checking Account</option>
                                                  <option value="Saving Account">Saving Account</option>
                                                  <option value="Brokerage Account">Brokerage Account</option>
                                                  <option value="Individual Retirement Account">Individual Retirement Account</option>
                                                  <option value="Certificates of Deposit (CDs)">Certificates of Deposit (CDs)</option>
                                                  <option value="Money Market Account">Money Market Account</option>
                                              </select>
                                          </div>
                                          <div class="input-group">
                                              <label class="label">Password*:</label>
                                              <input class="input--style-1" type="password" required name="upassword" placeholder="password">
                                          </div>
                                          <div class="input-group">
                                              <label class="label">Confirm password*:</label>
                                              <input class="input--style-1" type="password" required name="confirmpassword" placeholder="password">
                                          </div>
                                          <div class="input-group">
                                              <label class="label">Profile Image*: <span style="font-size:10px; color:red;">(Only 50kb & PNG image format allowed)</span></label>
                                              <input class="input--style-1" type="file" required name="file">
                                          </div>
                                          <input type="hidden" name="q" value="register_new_user">
                                          <input type="hidden" name="accpin" value="048111">
                                          <input type="hidden" name="conaccpin" value="048111">
                                          <div class="btn-next-con">
                                              <a class="btn-back" href="#tab2">back</a>
                                              <button class="btn-last" id="signup-btn" type="submit">Create Account</button>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                          </div>

                      </div>

                  </div>

              </div>

          </div>
           -->
        <!--         <div class="newsection">

              <div class="container">
              <div class="row">

              <div class="col-lg-3 col-md-3 co-sm-3">
              <div class="box1short">

        <h2>Right Account</h2>
        <p>we believe that responding to your growing needs and fulfilling your dreams require a partnership with the right bank account.</p>

              </div>
              </div>

              <div class="col-lg-3 col-md-3 co-sm-3">
              <div class="box1short">

        <h2>Investment</h2>
        <p>TFSAs & RRSPs Mutual Funds RESPs & GICs Other Investments & Grow your money with smart easy ways to invest Online.</p>

              </div>
              </div>

              <div class="col-lg-3 col-md-3 co-sm-3">
              <div class="box1short">

        <h2>Secure Transaction</h2>
        <p>Your Financial and personal Online safety and security is our number one priority. as your account is protected with state of the art security protocol.</p>

              </div>
              </div>



               <div class="col-lg-3 col-md-3 co-sm-3">
              <div class="box1short">

        <h2>Tax Free Accounts</h2>
        <p>Save exactly the amount that’s right for you, whenever you choose and as often as you like. This ensures you save al your money worry free.</p>

              </div>
              </div>

              </div>
              </div>
              </div> -->
    </div>
</div>

<footer class="site-footer">
    <div class="copyright-footer text-center">
        <div class="container">
            <div class="row">
                Copyright © 2023 All rights reserved | {{ env('APP_NAME') }}
            </div>
        </div>
    </div>
</footer>
<!-- including scripts -->
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
            skin                : 'altus',
            skinsPath           : 'css/skins/',
            responsiveUnder     : 1200,
            layersContainer     : 1200,
            responsive          : false,
            showCircleTimer     : false,
            thumbnailNavigation : 'disabled',
            navStartStop        : false,
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#firststepbutton1").click(
            function()
            {
                var login_id=$("#useridtextid").val();
                if(login_id=="")
                {
                    alert("Please Enter User ID..");
                    return false;
                }
                else
                {
                    $("#levelhigh1").hide();
                    $("#meloaderidxx").show();

                    $.post("controller.php", { q:"step_first_login", login_id:login_id }, function(data)
                        {
                            if(data=="empty")
                            {
                                $("#meloaderidxx").hide();
                                $("#levelhigh1").show();
                                alert("Please Enter User ID..");
                            }
                            if(data==""){
                                $("#meloaderidxx").hide();
                                $("#levelhigh1").show();
                                alert("Account suspended, please contact support.");
                            }
                            if(data=="invalidid")
                            {
                                $("#meloaderidxx").hide();
                                $("#levelhigh1").show();
                                alert("UserId is not registered for Online Banking..");
                            }
                            if(data=="notpermission")
                            {
                                $("#meloaderidxx").hide();
                                $("#levelhigh1").show();
                                alert("Your Account is not Active...Please try again or contact support...");
                            }
                            if(data=="done")
                            {
                                $("#meloaderidxx").hide();
                                $("#levelhigh1").hide();

                                $("#levelhigh2").show();
                            }
                        }

                    );
                }
            }
        );
    });

</script>
<script type="text/javascript">
    $(document).ready(function() {

        $("#firststepbutton2").click(
            function()
            {
                var password_user=$("#userpasswordid").val();
                if(password_user=="")
                {
                    alert("Please Enter Password..");
                    return false;
                }
                else
                {
                    $("#levelhigh2").hide();
                    $("#meloaderidxx").show();
                    $.post("controller.php", { q:"step_second_login", password_user:password_user  }, function(data)
                        {
                            if((data=="empty")||(data=="wrongpassword"))
                            {
                                if(data=="empty")
                                {
                                    $("#meloaderidxx").hide();
                                    $("#levelhigh2").show();
                                    alert("Please Enter Password..");
                                }
                                if(data=="wrongpassword")
                                {
                                    $("#meloaderidxx").hide();
                                    $("#levelhigh2").show();
                                    alert("UserId does not match with password..");
                                }
                            }
                            else
                            {


                                $("#meloaderidxx").hide();
                                $("#levelhigh2").hide();
                                $("#showafterpasswordimage").php(data);
                                $("#levelhigh3").show();

                            }
                        }
                    );
                }
            }
        );

    });

</script>



<!-- for preloader -->

<script src="../css/js/main.js"></script>





<!-- Signup scripts-->
<script src="{{ asset('custom/vendor/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('custom/vendor/bootstrap-wizard/bootstrap.min.js') }}"></script>
<script src="{{ asset('custom/vendor/bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
<script src="{{ asset('code.jquery.com/ui/1.12.0/jquery-ui.min.html') }}" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="crossorigin="anonymous"></script>
<script src="{{ asset('custom/js/global.js') }}"></script>
</body>
</html>
