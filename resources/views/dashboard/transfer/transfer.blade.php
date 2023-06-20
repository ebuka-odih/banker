@extends('dashboard.layout.app')
@section('content')


    <div class="container text-uppercase mt-4" style="background-color: #193e8f;
            color: white;
            line-height: 6;
            font-size: 24px;
            font-weight: 600;
            border-radius: 12px; ">


        {{ $user->first_name.' '.$user->last_name }}


    </div>






    <div class="container" style="background-color: #ffbb38;
color: black;
line-height: 3;
font-size: 20px;
font-weight: 600;
border-radius: 19px;
margin-top: 20px;">

        <!--
        <div class="text-uppercase" >   Account Number - 1356983103 </div>

         -->
        <center>  Available Balance : $ @convert($user->account->balance)</center>








        <div style="font-size: 14px !important; font-weight: lighter !important;">&nbsp;</div>







        <form method="get" action="{{ route('user.prcoessTransfer') }}">
            @csrf

            <div class="form-group">
                <label for="exampleFormControlSelect1">Select Transfer Option</label>
                <select class="form-control" id="exampleFormControlSelect1" name="transfer_type" required="">
                    <option selected="" hidden="" disabled="">Transfer Option </option>
                    <option value="Wiretransfer">Wire transfer </option>
                    <option value="Mobiledeposit">Mobile deposit </option>
                    <option value="Banktransfer">Domestic Transfer</option>

                </select>
            </div>

            <center>
                <input style="width: 20%" type="submit" name="submit" value="SUBMIT" class="btn btn-primary">
            </center>

        </form>








    </div>

@endsection


