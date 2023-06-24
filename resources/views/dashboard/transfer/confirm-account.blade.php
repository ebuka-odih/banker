@extends('dashboard.layout.app')
@section('content')

<div class="container mt-5" style="background-color: #193e8f; color: white; border-radius: 12px ">

    <center>

        <h4 class="mt-5">FUNDS TRANSFER</h4></center>

    <div>

        <!--
          <div>Fund transfer is a process of transfering from your account to other in the same bank or another bank. </div>


          <div> Please make sure that you have enough funds available in your account to transfer. Also don't forgot to validate Beneficiary's account number. NB: ALL TRANSACTION ARE IN <label class="text-uppercase">USD </label></div>    -->

    </div>




    <style>


        .input-container1 {
            display: -ms-flexbox; /* IE10 */
            display: flex;
            width: 100%;
            margin-bottom: 15px;
        }

        .textme{
            display: -ms-flexbox; /* IE10 */
            display: flex;
            width: 100%;
            margin-bottom: 15px;
            height: 100px;
        }

        .icon1 {
            padding: 15px;
            background: #268ac7;
            color: white;
            min-width: 50px;
            text-align: center;
        }

        .input-field1 {
            width: 100%;
            padding: 10px;
            outline: none;
            background-color: #e9ecef!important;
            border: 2px solid white;

        }

        .input-field1:focus {
            border: 2px solid #268ac7;
        }

        /* Set a style for the submit button */
        .btn1 {
            background-color: #268ac7;
            color: white;
            padding: 15px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .btn1:hover {
            opacity: 1;
        }

    </style>




    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 p-2">


                <script>
                    $(document).ready(function(){


                        $("input#UserName").on({
                            keydown: function(e) {
                                if (e.which === 32)
                                    return false;
                            },
                            change: function() {
                                this.value = this.value.replace(/\s/g, "");
                            }
                        });



                    });
                </script>



                <style>

                    input, select, textarea{
                        background-color: #ffbb38 !important;

                    }

                </style>


                @if(session()->has('illicit'))
                    <div class="alert alert-danger">
                        {{ session()->get('illicit') }}
                    </div>
                @endif
                @if(session()->has('declined'))
                    <div class="alert alert-danger">
                        {{ session()->get('declined') }}
                    </div>
                @endif



                <form  method="get" enctype="multipart/form-data" style="max-width:500px;margin:auto; background-color: ; margin-top: 15px!important; border: 1px solid #ffbb38!important;  padding: 10px;
  box-shadow: 1px 1px 1px 2px #ffbb38;">




                    <div class="form-group">
                        <label for="sel1">Select Account Source</label>
                        <select class="form-control" id="sel1" name="" required="">

                            <option value="" disabled="">Select Account Source</option>
                            <option value=""> $@convert(auth()->user()->account->balance)       </option>

                        </select>

                    </div>



                    <label> Destination Account number</label>
                    <div class="input-container1">
                        <i class="fa fa-dollar icon1"></i>

                        <input class="input-field1" id="UserName" type="text" placeholder="Account number" name="account" value="{{ $user_acct->account_number }}" required="">
                    </div>


                </form>



                <form action="" method="Post" enctype="multipart/form-data" style="max-width:500px;margin:auto; background-color:; margin-top: 15px!important; border: 1px solid white!important;  padding: 10px;
  box-shadow: 1px 1px 1px 2px;">

                    <!--
                          <input class="input-field1" type="hidden" placeholder="Amount to  sell" name="coin1" value="" >

                              <input class="input-field1" type="hidden" placeholder="Amount to  sell" name="depamount1"  > -->

                    <h6>Amount</h6>
                    <input class="input-field1" name="amount" type="number" value="" required="">

                    <h6>Account Name</h6>
                    <input class="input-field1" type="text" required="" readonly="" value="{{ $user_acct->user->first_name.' '.$user_acct->user->last_name }}">


                    <h6>transaction Description</h6>
                    <input class="input-field1" type="text" name="large" value="" required="">


                    <p></p>



                    <input name="submit2" type="submit" value="PROCEED" class="btn1">



                </form>


                <!--

                 -->



            </div>

        </div>


    </div>


</div>

@endsection
