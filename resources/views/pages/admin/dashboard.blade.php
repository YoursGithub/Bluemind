@extends('layout.app')

@section('main-section')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">


            <div class="col-xl-8">
                <div class="row">


                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Total Investors</p>
                                        <h4 class="mb-0">{{ $users }}</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                            <span class="avatar-title">
                                                <i class="bx bx-copy-alt font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Total Profit</p>
                                        <h4 class="mb-0">{{ number_format($profit) }}</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center ">
                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="bx bx-archive-in font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Total Invested Amounts</p>
                                        <h4 class="mb-0">{{ number_format($investments) }}</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center ">
                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="bx bx-archive-in font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                 
               
                </div>
            </div> 


            
                      
                     

                        <div class="row">
                           

                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Notifications</h4>

                                        <ul class="list-group" data-simplebar style="max-height: 390px;">
                                            <li class="list-group-item border-0">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar-xs">
                                                            <span class="avatar-title rounded-circle bg-light">
                                                                <img src="/assets/images/companies/img-1.png" alt="" height="18">
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h5 class="font-size-14">Donec vitae sapien ut</h5>
                                                        <p class="text-muted">If several languages coalesce, the grammar of the resulting language</p>
    
                                                        <div class="float-end">
                                                            <p class="text-muted mb-0"><i class="mdi mdi-account me-1"></i> Joseph</p>
                                                        </div>
                                                        <p class="text-muted mb-0">12 Mar, 2020</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item border-0">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar-xs">
                                                            <span class="avatar-title rounded-circle bg-light">
                                                                <img src="/assets/images/companies/img-2.png" alt="" height="18">
                                                            </span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="flex-grow-1">
                                                        <h5 class="font-size-14">Cras ultricies mi eu turpis</h5>
                                                        <p class="text-muted">To an English person, it will seem like simplified English, as a skeptical cambridge</p>

                                                        <div class="float-end">
                                                            <p class="text-muted mb-0"><i class="mdi mdi-account me-1"></i> Jerry</p>
                                                        </div>
                                                        <p class="text-muted mb-0">13 Mar, 2020</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item border-0">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar-xs">
                                                            <span class="avatar-title rounded-circle bg-light">
                                                                <img src="/assets/images/companies/img-3.png" alt="" height="18">
                                                            </span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="flex-grow-1">
                                                        <h5 class="font-size-14">Duis arcu tortor suscipit</h5>
                                                        <p class="text-muted">It va esser tam simplic quam occidental in fact, it va esser occidental.</p>

                                                        <div class="float-end">
                                                            <p class="text-muted mb-0"><i class="mdi mdi-account me-1"></i> Calvin</p>
                                                        </div>
                                                        <p class="text-muted mb-0">14 Mar, 2020</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item border-0">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar-xs">
                                                            <span class="avatar-title rounded-circle bg-light">
                                                                <img src="/assets/images/companies/img-1.png" alt="" height="18">
                                                            </span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="flex-grow-1">
                                                        <h5 class="font-size-14">Donec vitae sapien ut</h5>
                                                        <p class="text-muted">If several languages coalesce, the grammar of the resulting language</p>

                                                        <div class="float-end">
                                                            <p class="text-muted mb-0"><i class="mdi mdi-account me-1"></i> Joseph</p>
                                                        </div>
                                                        <p class="text-muted mb-0">12 Mar, 2020</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

        </div>
    </div>
</div> 



@endsection


@section('script-section')

 <!-- apexcharts -->
 <script src="/assets/libs/apexcharts/apexcharts.min.js"></script>

 <!-- crypto dash init js -->
 <script src="/assets/js/pages/crypto-dashboard.init.js"></script>
@endsection