@extends('layout.app')

@section('head-section')

<link href="/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />     

@endsection

@section('main-section')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Referral Investments</h4>

                    </div>
                </div>

            </div>
          
       
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @php
                $totalProfit = 0 ;
            @endphp
   
            <!-- end page title -->

            <div class="row">
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-muted fw-medium">Total Profit</p>

                                    @foreach ( $combinedTransactions as $inv )

                                                   
                                    @php
                                        $totalProfit += (0.1 * $inv['profit']) ;
                                    @endphp
                                    
                                    @endforeach

                                    <h4 class="mb-0">₹ {{ number_format($totalProfit) }}
                                    </h4>
                                </div>

                                <div class="flex-shrink-0 align-self-center ">
                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                        <span class="avatar-title rounded-circle bg-primary">
                                            <i class='bx bxs-dollar-circle font-size-24' ></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                          

                            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                <thead>
                                <tr>
                                    <th>S No.</th>

                                    <th>Name</th>
                                    <th>Email</th>

                                    <th>Amount</th>
                       
                                    <th style="color : #41ffb0 ; font-weight : 700">Profit</th>

                                    <th style="color : #41ffb0 ; font-weight : 700">Referral Profit</th>


                                    <th>Investment Date</th>

                                </tr>
                                </thead>

                                <tbody>
                                    @foreach ( $combinedTransactions as $inv )

                                                   
                                    @php
                                        $totalProfit += (0.1 * $inv['profit']) ;
                                    @endphp
                                        
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $inv['user']->name }}</td>
                                    <td>{{ $inv['user']->email }}</td>

                                    <td>₹ {{ number_format($inv['investment']->amount) }}</td>


                                    <td> ₹ {{ number_format($inv['profit']) }}</td>

                                    <td> ₹ {{ number_format(0.1 * $inv['profit']) }}</td>



                                    <td>{{  \Carbon\Carbon::parse($inv['created_at'])->format('d F Y') }}</td>

                                  
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