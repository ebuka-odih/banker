@extends('pages.layouts.app')
@section('content')

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>FAQ</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->


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
                            <div id="collapseOne" class="accordion-content collapse ">
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
                                <p>If you're an existing {{ env('APP_NAME') }} bank customer, you can reset your password online. On the log on screen, click the 'Forgotten your logon details?' link. You'll be taken through some security questions so that
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


    <!-- ##### Newsletter Area Start ###### -->
    <section class="newsletter-area section-padding-100 bg-img jarallax" style="background-image: url(img/bg-img/6.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-lg-8">
                    <div class="nl-content text-center">
                        <h2>Subscribe to our newsletter</h2>
                        <form action="#" method="post">
                            <input type="email" name="nl-email" id="nlemail" placeholder="Your e-mail">
                            <button type="submit">Subscribe</button>
                        </form>
                        <!-- <p>Curabitur elit turpis, maximus quis ullamcorper sed, maximus eu neque. Cras ultrices erat nec auctor blandit.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ###### -->


@endsection
