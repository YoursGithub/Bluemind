@extends('layout.app')



@section('main-section')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Create Team Member</h4>

                                <form action="{{ route('admin.create-team') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-4">
                                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">
                                            Name
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="horizontal-email-input"
                                                placeholder="Enter Name " name="name">
                                        </div>
                                    </div>


                                    <div class="row mb-4">
                                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">
                                            Designation
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="horizontal-email-input"
                                                placeholder="Enter Designation " name="designation">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <!-- Aadhaar Card Upload -->
                                        <label class="col-sm-3 col-form-label">Image</label>
                                        <x-image-component :name="'image'" />

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
    <script src="/assets/admin/js/image-script.js"></script>
@endsection
