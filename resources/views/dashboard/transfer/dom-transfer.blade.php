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


                @if(session()->has('not_found'))
                    <div class="alert alert-danger">
                        {{ session()->get('not_found') }}
                    </div>
                @endif


                <form action="{{ route('user.domTransfer') }}" method="GET" enctype="multipart/form-data" style="max-width:500px;margin:auto; background-color: ; margin-top: 15px!important; border: 1px solid #ffbb38!important;  padding: 10px;
  box-shadow: 1px 1px 1px 2px #ffbb38;">
                    @csrf

                    <div class="form-group">
                        <label for="sel1">Select Account Source</label>
                        <select class="form-control" id="sel1" name="" required="">

                            <option value="" disabled="">Select Account Source</option>
                            <option value=""> $@convert(auth()->user()->account->balance)       </option>

                        </select>

                    </div>

                    <label>Enter Destination Account number</label>
                    <div class="input-container1">
                        <i class="fa fa-dollar icon1"></i>

                        <input class="input-field1" id="UserName" type="text" placeholder="Account number" name="acct_number" value=" " required="">
                    </div>

                    <br>
                    <input name="submit1" value="NEXT" type="submit" class="btn1">


                </form>

                <!--


           <div class="alert alert-danger alert-dismissible">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <strong>Account do not exist </strong>

             </div>


            -->



            </div>

        </div>


    </div>




</div>

@endsection
