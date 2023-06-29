@extends('dashboard.layout.app')
@section('content')

    <div class="container">






        <h3 class="mt-5 text-center" style="font-weight: 600; color: white">Change Password</h3>



        <form class="text-center" method="post" action="{{ route('user.storePassword') }}" enctype="multipart/form-data">

            @csrf
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <span style="color: green; font-size: 18px!important;"></span>

            <span style="color: green; font-size: 18px!important;"></span>

            <span style="color: green; font-size: 18px!important;"></span>



            <span style="color: green; font-size: 18px!important;"></span>


            <div class="form-group has-feedback">
                <input type="password" required="" name="current_password" autocomplete="off" class="form-control btn-lg" style="border-radius: 10px;" placeholder="Your old Password" data-listener-added_c40ee853="true">
            </div>

            <div class="form-group has-feedback">
                <input type="password" required="" name="new_password" autocomplete="off" class="form-control btn-lg" style="border-radius: 10px;" placeholder="New Password" data-listener-added_c40ee853="true">
            </div>


            <div class="form-group has-feedback">
                <input type="password" required="" name="new_confirm_password" autocomplete="off" class="form-control btn-lg" style="border-radius: 10px;" placeholder="Confirm New Password" data-listener-added_c40ee853="true">
            </div>

            <div class="mt-5">

                <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat" style="border-radius: 10px;"><i class="fa fa-user-circle-o"></i> Change Password </button>

            </div>


        </form>

        <br>
        <h3 class="mt-5 text-center" style="font-weight: 600; color: white">Change Pin</h3>



        <form class="text-center" method="post" action="{{ route('user.changePin') }}" enctype="multipart/form-data">
            @csrf
            @if(session()->has('decline'))
                <div class="alert alert-danger">
                    {{ session()->get('decline') }}
                </div>
            @endif
            @if(session()->has('success_pin'))
                <div class="alert alert-success">
                    {{ session()->get('success_pin') }}
                </div>
            @endif

            <span style="color: green; font-size: 18px!important;"></span>

            <span style="color: green; font-size: 18px!important;"></span>

            <span style="color: green; font-size: 18px!important;"></span>



            <span style="color: green; font-size: 18px!important;"></span>


            <div class="form-group has-feedback">
                <input type="password" required="" name="pass" autocomplete="off" class="form-control btn-lg" style="border-radius: 10px;" placeholder="Your Password" data-listener-added_c40ee853="true">
            </div>


           <p style="color: white">A new generated pin will be sent to your mail <strong>{{ auth()->user()->email }}</strong></p>


            <div class="mt-5">

                <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat" style="border-radius: 10px;"><i class="fa fa-user-circle-o"></i> Submit </button>

            </div>


        </form>


    </div>

@endsection
