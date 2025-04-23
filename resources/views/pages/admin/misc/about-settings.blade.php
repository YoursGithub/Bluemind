@extends('layout.app')



@section('main-section')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">About Settings</h4>

                                @php
                                    $data = $globalData->about;
                                @endphp


                                <form action="{{ route('admin.about-settings') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-4">
                                        <!-- Aadhaar Card Upload -->
                                        <label class="col-sm-3 col-form-label">About Page Image </label>
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
