@extends('layout.app')



@section('main-section')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Home Settings</h4>

                                @php
                                    $data = $globalData->home;
                                @endphp


                                <form action="{{ route('admin.home-settings') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-4">
                                        <label for="horizontal-email-input" class="col-sm-3 col-form-label"> Happy
                                            Clients</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="horizontal-email-input"
                                                placeholder="Enter Happy Clients " name="happy_clients"
                                                value="{{ $data?->happy_clients }}">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="horizontal-name-input" class="col-sm-3 col-form-label">Successful
                                            Projects</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="horizontal-name-input"
                                                placeholder="Enter Successful Projects" name="successful_projects"
                                                value="{{ $data?->successful_projects }}">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <!-- Aadhaar Card Upload -->
                                        <label class="col-sm-3 col-form-label">Home Page Popup </label>
                                        <x-image-component :name="'image'" :value="$data?->image" />

                                    </div>


                                    <div class="row justify-content-end">
                                        <div class="col-sm-9">
                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script-section')
    <script src="/admin/js/image-script.js"></script>
@endsection
