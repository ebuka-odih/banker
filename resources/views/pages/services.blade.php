@extends('pages.layouts.app')
@section('content')

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Services</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Services</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Services Area Start ###### -->
    <section class="services-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <div class="line"></div>
                        <p>Take look at our</p>
                        <h2>Our services</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="200ms">
                        <div class="icon">
                            <i class="icon-profits"></i>
                        </div>
                        <div class="text">
                            <h5>secure Online Banking</h5>
                            <p>we provide clients with the best online banking experience all from the comfort of your home.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <div class="icon">
                            <i class="icon-money-1"></i>
                        </div>
                        <div class="text">
                            <h5>Easy and fast answer</h5>
                            <p>Our team of experienced support agents are ever ready to assist with all your possible needs.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="400ms">
                        <div class="icon">
                            <i class="icon-coin"></i>
                        </div>
                        <div class="text">
                            <h5>Cash Back</h5>
                            <p>Earn up to 15% cash back at locations you choose when you use your eligible {{ env('APP_NAME') }} Bank debit card After your purchase, cash back is automatically credited to the account of your choice..</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="icon">
                            <i class="icon-smartphone-1"></i>
                        </div>
                        <div class="text">
                            <h5>Secure financial services</h5>
                            <p>We employ high tech encryption techniques to ensure smooth and safe transactions across.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="600ms">
                        <div class="icon">
                            <i class="icon-diamond"></i>
                        </div>
                        <div class="text">
                            <h5>Good investments</h5>
                            <p> we are here to provide customers with the best investment packages to grow your money faster.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="icon">
                            <i class="icon-piggy-bank"></i>
                        </div>
                        <div class="text">
                            <h5>Accumulation goals</h5>
                            <p> As your account balance grows, your interest rate has the potential to increase too.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Services Area End ###### -->

    <!-- ##### Special Feature Area Start ###### -->
    <section class="special-feature-area d-flex flex-wrap">
        <!-- Special Feature Content -->
        <div class="special-feature-content section-padding-100">
            <div class="feature-text">
                <!-- Section Heading -->
                <div class="section-heading white mb-50">
                    <div class="line"></div>
                    <p>Bold desing and beyound</p>
                    <h2>Easy and Fast Transactions</h2>
                </div>
                <h6>Our Banking system is a quick, convenient, secure and easy way to perform your banking transactions (transfer money, check balance, pay bills and lots more) anytime and anywhere, using any type of phone without need for internet connectivity
                    or data.</h6>
                <!-- <a href="#" class="btn credit-btn btn-2 box-shadow">Read More</a> -->
            </div>
        </div>
        <!-- Special Feature Thumbnail -->
        <div class="special-feature-thumbnail bg-img jarallax" style="background-image: url(img/bg-img/20.jpg);"></div>
    </section>
    <!-- ##### Special Feature Area End ###### -->

    <!-- ##### Special Feature Area Start ###### -->
    <section class="special-feature-area style-2 d-flex flex-wrap">
        <!-- Special Feature Thumbnail -->
        <div class="special-feature-thumbnail bg-img jarallax" style="background-image: url(img/bg-img/21.jpg);"></div>
        <!-- Special Feature Content -->
        <div class="special-feature-content section-padding-100">
            <div class="feature-text">
                <!-- Section Heading -->
                <div class="section-heading white mb-50">
                    <div class="line"></div>
                    <p>Bold desing and beyound</p>
                    <h2>Protection that meets your needs</h2>
                </div>
                <h6>Making sure you have enough money if anything unexpected happens may provide you and your family with peace of mind. Protection products have no cash-in value at any time and cover will stop if you aren’t able to pay your premiums. If
                    the policy amount has not been paid out by the end of the selected term, the policy will end and you’ll get nothing back.</h6>
                <!-- <a href="#" class="btn credit-btn box-shadow">Read More</a> -->
            </div>
        </div>
    </section>
    <!-- ##### Special Feature Area End ###### -->

    <!-- ##### FAQ Area Start ###### -->
    <section class="credit-faq-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- FAQ Area -->
                <div class="col-12 col-md-12">

                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">How do I register my account for Internet Banking?
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a></h6>
                            <div id="collapseOne" class="accordion-content collapse show">
                                <p>Internet Banking is available to our personal customers aged over 11. Registering is quick and easy; all you need to do is complete our online registration form, The Registration process is completely secure and will only
                                    take a few minutes to complete. </p>
                            </div>
                        </div>

                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">How do I log on to Internet Banking?
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a>
                            </h6>
                            <div id="collapseThree" class="accordion-content collapse">
                                <p>If you're registered for Internet Banking you can log on via the Internet Banking log on page using your User ID and password. </p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapsefour">What should I do if I have forgotten my Password?
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a>
                            </h6>
                            <div id="collapsefour" class="accordion-content collapse">
                                <p>If you're an existing {{ env('APP_NAME') }} Bank Internet Banking customer, you can reset your password online. On the log on screen, click the 'Forgotten your logon details?' link. You'll be taken through some security questions so that
                                    we can verify your identity. Please follow the on-screen instructions which explain the next steps to follow. As soon as we've confirmed your identity, your password reset will be complete and you'll be able to continue
                                    with your Internet Banking.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapsefive">When will I receive my Internet Banking welcome pack?
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a>
                            </h6>
                            <div id="collapsefive" class="accordion-content collapse">
                                <p>Once you've completed your Internet Banking registration we'll send you a welcome pack by post, usually within 3 working days. This may take longer if you live overseas.</p>
                            </div>
                        </div>

                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapsesix" data-parent="#accordion" data-toggle="collapse" href="#collapsesix">Can I share Internet Banking access with my spouse, partner or another person?
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a>
                            </h6>
                            <div id="collapsesix" class="accordion-content collapse">
                                <p>You must never share your Internet Banking Password and Memorable Information (second password) with anyone else, even if you have a joint account with them. This includes friends and family such as your wife, husband or
                                    partner. </p>
                            </div>
                        </div>
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapsesev">What if I am having trouble logging on to Internet Banking?
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a>
                            </h6>
                            <div id="collapsesev" class="accordion-content collapse">
                                <p>If you're having trouble logging on, make sure you're entering your information correctly into the fields. If you have forgotten your user ID or password, you can click on the 'Forgotten your User ID' or 'Forgotten your
                                    password' links on the log in screen in order to reset your information.</p>
                            </div>
                        </div>
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseeight">Why does Internet Banking sometimes log me out automatically?
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a>
                            </h6>
                            <div id="collapseeight" class="accordion-content collapse">
                                <p>For security reasons the Internet Banking service is set to log you out automatically after approximately 10 minutes of inactivity on your account pages. A message will warn you that this time is approaching and will allow
                                    you to close your access yourself, or return to the pages and continue using the service.</p>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- ##### FAQ Area End ###### -->

@endsection
