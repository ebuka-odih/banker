@extends('dashboard.layout.app')
@section('content')

<div class="container" style="margin-top: -3px!important; ">


    <div class="text-center"  style="color: white; background-color: #193e8f; line-height: 3; border-radius: 7px ">
        <a class="mra" style="color: white; text-decoration: none;" href="credit_card.php">

            <i class="fas fa-folder-open"></i>      Get your credit card
        </a>
    </div>


    <div class="text-uppercase" style="color: #c8cdd9; font-weight: 600; line-height: 6;"> Savings Account    </div>




    <div class="row" style="color: white; background-color: #193e8f; line-height: 8; border-radius:20px;
font-weight: 600;
 ">

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 text-center"  >
            <strong>Account number:</strong> {{ optional($user->account)->account_number }}



        </div>



        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 text-center"  >

            &#36; @convert(optional($user->account)->balance)


        </div>

    </div>





    <div class="text-center"  style="color: white; background-color: #193e8f; line-height: 3; border-radius: 7px; margin-top: 100px ">   <a class="mra" style="color: white; text-decoration: none;" href="statement.php">

            <i class="fa fa-history fa-fw"></i>      View transaction History
        </a></div>


    <div class="row">
        <!--

          <img src="main.png" class="img-fluid img-responsive max-width: 100% height: auto">

         -->
        <div class="col-1">

        </div>


        <div class="col-1">

        </div>

    </div>
</div>

@endsection
