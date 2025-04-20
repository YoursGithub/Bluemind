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
                        <h4 class="mb-sm-0 font-size-18">Capitals</h4>

                   

                    </div>
                </div>

                <div class="col-12" style="margin-bottom: 40px;">
                    <a href="{{ route('admin.create-investment') }}">

                    <button type="button" class="btn btn-success waves-effect waves-light">
                        <i class="bx bx-user-plus"></i> Add Capital
                    </button>
                    </a>

                </div>

            </div>
          
       
            

            
   
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                          

                            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                <thead>
                                <tr>
                                    <th>S No.</th>

                                    <th>Referrence Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Amount</th>
                                    <th>Currecny</th>
                                    <th>Investment Date</th>
                                    <th>Action</th>

                                </tr>
                                </thead>

                                <tbody>
                                    @foreach ( $investments as $inv )
                                        
                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td>
                                        <a href="{{ route('admin.all-transactions') }}?refId={{ $inv->payment_id }}" >
                                            {{ $inv->payment_id }}
                                        </a>
                                        </td>

                                    <td>{{ $inv->user->name }}</td>
                                    <td>{{ $inv->user->email }}</td>

                                    <td> ₹ {{ number_format($inv->amount) }}</td>
                                    <td>{{ $inv->currency }}</td>


                                    <td>{{  \Carbon\Carbon::parse($inv->created_at)->format('d F Y') }}</td>

                                    <td> 
                                        <a href="{{ route('admin.update-investment',['inv'=>$inv->id]) }}" class="btn btn-outline-secondary btn-sm edit" title="Edit">
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