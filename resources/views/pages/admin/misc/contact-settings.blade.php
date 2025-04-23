@extends('layout.app')



@section('main-section')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Contact Settings</h4>

                                @php
                                    $data = $globalData->contact;
                                @endphp


                                <form action="{{ route('admin.contact-settings') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-4">
                                        <label for="horizontal-email-input" class="col-sm-3 col-form-label"> 
                                            Address
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="horizontal-email-input"
                                                placeholder="Enter Address " name="address"
                                                value="{{ $data?->address }}">
                                        </div>
                                    </div>


                                    <div class="row mb-4">
                                        <label for="horizontal-email-input" class="col-sm-3 col-form-label"> 
                                            Phone Number
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="horizontal-email-input"
                                                placeholder="Enter Phone " name="phone"
                                                value="{{ $data?->phone }}">
                                        </div>
                                    </div>


                                    <div class="row mb-4">
                                        <label for="horizontal-email-input" class="col-sm-3 col-form-label"> 
                                            Location Url
                                        </label>

                                        <textarea name="location_url" cols="30" rows="10">{{ $data?->location_url }}</textarea>


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
