@extends('admin.layout.app')
@section('content')

<main id="main-container">

    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Responsive Tables</h1>
                <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Tables</li>
                        <li class="breadcrumb-item active" aria-current="page">Responsive</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Full Table -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Full Table</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option">
                        <i class="si si-settings"></i>
                    </button>
                </div>
            </div>
            <div class="block-content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-vcenter">
                        <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Balance</th>
                            <th>Account Number</th>
                            <th>Joined date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td class="text-center">
                                <img class="img-avatar img-avatar48" src="{{ $user->avatar }}" alt="">
                            </td>
                            <td class="fw-semibold">
                                {{ $user->first_name }} {{ $user->last_name }}
                            </td>
                            <td><a target="_blank" href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                            <td><strong>$ {{ optional($user->account)->balance }}</strong></td>
                            <td><strong>{{ optional($user->account)->account_number }}</strong></td>
                            <td><strong>{{ date('d/m/Y', strtotime($user->created_at ))}}</strong></td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                    <form method="POST" action="{!! route('admin.delete_user', $user->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <button data-toggle="tooltip" data-placement="top" type="submit" class="btn  btn-sm btn-alt-danger" onclick="return confirm(&quot;Delete User?&quot;)">
                                                <i class="fa fa-times"></i>
                                            </button>

                                        </div>

                                    </form>

                                </div>
                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END Full Table -->


    </div>
    <!-- END Page Content -->
</main>

@endsection
