@extends('dashboard.layout.app')
@section('content')
    <br>


    <div class="w3-row-padding w3-margin-bottom">







        <div class="table-responsive mt-5">
            <label style="background-color: #193e8f;color:white; width: 100%;text-align: center;line-height: 2;margin-bottom: auto; font-weight: 600; text-align: capitalize">USER DETAIL</label><table class="table table-hover table-sm text-capitalize" style="background-color: #193e8f; color: white; border-radius: 12px">



                <thead>





                <!--   <tr>
                    <th>USER  ACCOUNT DETAIL</th>
                   <th></th>
                  </tr> -->
                </thead>
                <tbody>
                <tr>
                    <td>Surname</td>
                    <td>{{ $user->last_name }} </td>

                </tr>
                <tr>
                    <td>Firstname</td>
                    <td>{{ $user->first_name }} </td>

                </tr>

                <tr>
                    <td>Sex</td>
                    <td>{{ $user->sex ? : "N/A" }} </td>

                </tr>

                <tr>
                    <td>Date of Birth</td>
                    <td>{{ date('Y-m-d', strtotime($user->dob)) ? : "N/A" }}</td>

                </tr>

                <tr>
                    <td>Occupation</td>
                    <td>{{ $user->occupation ? : "N/A" }} </td>

                </tr>




                <tr>
                    <td>Mail</td>
                    <td>{{ $user->email ? : "N/A" }}</td>

                </tr>



                <tr>
                    <td>Phone</td>
                    <td>{{ $user->phone ? : "N/A" }}</td>

                </tr>


                <tr>
                    <td>Address</td>
                    <td>{{ $user->address ? : "N/A" }}</td>

                </tr>



                <tr>
                    <td>State/Country</td>
                    <td>{{ $user->state ? : "N/A" }}/{{ $user->country ? : "N/A" }}</td>

                </tr>




                <tr>
                    <td>Zipcode</td>
                    <td>{{ $user->zipcode ? : "N/A" }}</td>

                </tr>




                <tr>
                    <td>Account number</td>
                    <td>{{ optional($user->account)->account_number ? : "N/A" }}</td>

                </tr>


                <tr>
                    <td>Currency</td>
                    <td>{{ $user->currency ? : "N/A" }}</td>

                </tr>



                <tr>
                    <td>Account Type</td>
                    <td>{{ $user->account_type ? : "N/A" }}</td>

                </tr>




                <tr>
                    <td>Balance</td>



                    <td>@convert($user->account->balance)</td>



                </tr>





                </tbody>


            </table>
        </div>


    </div>


@endsection
