@extends('dashboard.layout.app')
@section('content')

    <div class="w3-panel">
        <div class="" style="margin-top: 30px">


            <div class="">

                <div class="container accountstatement mt-5" style="background-color: white; color:black; padding-left: 0px !important; font-size:1em!important;">


                    <center style="background-color: #ffbb38 !important; width: 100% ! important; padding: 6px !important">   <h5>  Deposit Account Statement</h5></center>

                    <div class="table-responsive">

                        <table class="table table-striped" style="font-size: 13px">
                            <thead style="background-color: #ffbb38 !important;">
                            <tr>
                                <th>Date</th>
                                <th>Reference Number</th>
                                <th>Credit ($)</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($credit as $item)
                                <tr>
                                    <td>{{ date('Y-m-d', strtotime($item->created_at)) }}</td>
                                    <td> {{ $item->transId() }}</td>
                                    <td style="color:red;">@convert($item->amount)</td>
                                    <td style="color: green;">{!! $item->status() !!}</td>
                                    <td>
                                        @if($item->status < 1)
                                            <a href="{{ route('user.confirmTransfer', $item->id) }}" class="btn btn-link">Confirm</a>
                                        @else
                                            <a href="{{ route('user.transferSuccess', $item->id) }}" class="text-primary"><i class="fa fa-eye"></i></a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>


                        </table>
                    </div>




                </div>
            </div>
        </div>
        <hr>


        <!-- End page content -->
    </div>

@endsection
