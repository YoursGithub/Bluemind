@extends('layout.app')

@section('head-section')
    <link href="/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
@endsection

@section('main-section')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Users</h4>
                         </div>
                    </div>

                    <div class="col-12" style="margin-bottom: 40px;">
                        <a href="{{ route('admin.create-user') }}">

                            <button type="button" class="btn btn-success waves-effect waves-light">
                                <i class="bx bx-user-plus"></i> Create User
                            </button>
                        </a>

                    </div>

                </div>

                @php

                    $headings = ['Email'  , 'Login Referral' , 'Sharing Refrral' , 'Referred By'];

                    $properties = [ 'email', 'parent_referral' => ['code'] , 'sharing_referral' => ['code'] , 'parent_user' => ['name']  ];

                @endphp

                <form method="POST" action="{{ route('admin.export-csv') }}">
                    @csrf
                    <input type="hidden" name="data" value="{{ json_encode($users) }}">

                    <input type="hidden" name="headings" value="{{ json_encode($headings) }}">

                    <input type="hidden" name="properties" value="{{ json_encode($properties) }}">

                    <button type="submit" class="btn btn-sm btn-success">Export CSV</button>
                </form>


                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">



                                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>S No.</th>

                                            <th>Email</th>
                                            <th>Referred By</th>
                                            <th>Login Referral Code</th>
                                            <th>Sharing Referral Code</th>

                                            <th>Start date</th>
                                            <th>Edit</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>

                                                <td>{{ $user['email'] }}</td>
                                                <td>{{ $user['parent_user']['email'] ?? 'Admin' }}</td>



                                                @isset($user['parent_referral']['code'])
                                                    <td>{{ $user['parent_referral']['code'] }}</td>
                                                @else
                                                    <td>
                                                        <a href="{{ route('admin.generate-referral', ['user' => $user['id']]) }}">
                                                            <button type="button"
                                                                class="btn btn-success waves-effect waves-light">Generate
                                                                Referral</button></a>
                                                    </td>
                                                @endisset



                                                <td>{{ $user['sharing_referral']['code'] }}</td>




                                                @isset($user['email_verified_at'])
                                                    <td>{{ \Carbon\Carbon::parse($user['email_verified_at'])->format('d F Y') }}
                                                    </td>
                                                @else
                                                    <td>
                                                        <a href="{{ route('admin.user-email-verify', ['user' => $user['id']]) }}">
                                                            <button type="button"
                                                                class="btn btn-success waves-effect waves-light">Verify
                                                                Email</button></a>
                                                    </td>
                                                @endisset


                                                <td style="width: 100px">
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->



            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->



    </div>
@endsection

@section('script-section')
    <script src="/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="/assets/libs/jszip/jszip.min.js"></script>
    <script src="/assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="/assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

    <!-- Responsive examples -->
    <script src="/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="/assets/js/pages/datatables.init.js"></script>
@endsection
