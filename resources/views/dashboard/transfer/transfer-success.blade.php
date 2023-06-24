@extends('dashboard.layout.app')
@section('content')
    <style>
        body{margin-top:20px;
            background-color:#eee;
        }

        .card {
            box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
        }
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0,0,0,.125);
            border-radius: 1rem;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="invoice-title">
                            <h4 class="float-end font-size-15">{{ $transfer->transId() }} <span class="badge bg-success font-size-12 ms-2">Successful</span></h4>
                            <div class="mb-4">
                                <h2 class="mb-1 text-muted">{{ $transfer->transactionType() }}</h2>
                            </div>
                        </div>

                        <hr class="my-4">


                        <div class="py-2">
                            <h5 class="font-size-15">Transfer Summary</h5>

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <th>Debit Amount:</th>
                                        <td>$@convert($transfer->amount)</td>
                                    </tr>
                                    <tr>
                                        <th>A/C Number:</th>
                                        <td>{{ substr($transfer->sender, 0, 5) }}xxxx</td>
                                    </tr>
                                    <tr>
                                        <th>Account Name:</th>
                                        <td>{{ $transfer->user->last_name }} {{ $transfer->user->first_name }}</td>
                                    </tr>
                                    @if($transfer->wire_transfer)

                                    <tr>
                                        <th>Receiver A/C Number:</th>
                                        <td>{{ substr($transfer->acct_number, 0, 5) }}xxxx</td>
                                    </tr>
                                    <tr>
                                        <th>Recipient Name:</th>
                                        <td>{{ $transfer->acct_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Bank Name:</th>
                                        <td>{{ $transfer->bank_name }}</td>
                                    </tr>
                                    @else
                                        <tr>
                                            <th>Receiver A/C Number:</th>
                                            <td>{{ substr($transfer->acct_number, 0, 5) }}xxxx</td>
                                        </tr>
                                        <tr>
                                            <th>Recipient Name:</th>
                                            <td>{{ $transfer->user->first_name." ".$transfer->user->last_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Bank Name:</th>
                                            <td>{{ env('APP_NAME') }}</td>
                                        </tr>
                                    @endif
                                </table>
                                <table class="table align-middle table-nowrap table-centered mb-0">
                                    <tbody>


                                    <!-- end tr -->
                                    <tr>
                                        <th scope="row" colspan="4" class="border-0 text-end">Total</th>
                                        <td class="border-0 text-end"><h4 class="m-0 fw-semibold">$@convert($transfer->amount)</h4></td>
                                    </tr>
                                    <!-- end tr -->
                                    </tbody><!-- end tbody -->
                                </table><!-- end table -->
                            </div><!-- end table responsive -->
                            <div class="d-print-none mt-4">
                                <div class="float-end">
                                    <a href="javascript:window.print()" class="btn btn-success me-1"><i class="fa fa-print"></i></a>
                                    <a href="#" class="btn btn-primary w-md">Send</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
        </div>
    </div>

@endsection
