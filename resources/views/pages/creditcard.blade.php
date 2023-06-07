@extends('pages.layouts.app')
@section('content')

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Credit Card</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Credit Cards</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### News Area Start ##### -->
    <section class="news-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Single News Area -->
                <div class="col-md-12">

                    <!-- Single Blog Area -->
                    <div class="single-blog-area mb-70">
                        <div class="blog-thumbnail">
                            <!--  <a href="#"><img src="img/core-img/tr.png" class="mx-auto text-center" alt=""></a> -->
                        </div>
                        <div class="blog-content">
                            <span>July 18, 2018</span>
                            <a href="#" class="post-title">Travel reward credit card</a>

                            <p>Our travel credit card is worth since it allows you to earn points or miles that you will actually be able to redeem for travel, perks you can use to save time and money, and even protections to help when things go wrong on
                                the road.</p>
                        </div>
                    </div>

                    <!-- Single Blog Area -->
                    <div class="single-blog-area mb-70">
                        <div class="blog-thumbnail">
                            <a href="#"><img src="img/core-img/cashr.png" alt=""></a>
                        </div>
                        <div class="blog-content">
                            <span>July 18, 2018</span>
                            <a href="#" class="post-title">{{ env('APP_NAME') }} Bank reward</a>

                            <p>$200 online cash rewards bonus offer and 3% cash back in the category of your choice</p>
                            <ol>
                                <li>
                                    3% cash back in the category of your choice, 2% cash back at grocery stores and wholesale clubs and unlimited 1% cash back on all other purchases (on the first $2,500 in combined choice category/grocery store/wholesale club purchases each quarter)
                                </li>
                                <br>
                                <li>
                                    Your choice categories include: gas, online shopping, dining, travel, drug stores, or home improvement/furnishings, with the option to change your category online or through our mobile app once each calendar month for future purchases, or make no change
                                    and the category stays the same
                                </li>
                                <br>
                                <li>
                                    Introductory 0%† APR for your first 12 billing cycles for purchases. After the intro APR offer ends, a Variable APR that's currently 13.99% to 23.99% will apply.
                                </li>
                                <br>
                                <li>
                                    Preferred Rewards members earn 25%-75% more cash back on every purchase. That means the 3% choice category could go up to 5.25% and the 2% at grocery stores and wholesale clubs could go up to 3.5%, for the first $2,500 in combined choice category/grocery
                                    store/wholesale club purchases each quarter, and the 1% for all other purchases could go up to 1.75%.
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Area -->

            </div>
        </div>
    </section>
    <!-- ##### News Area End ##### -->


@endsection
