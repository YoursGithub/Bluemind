@extends('layout.app')



@section('main-section')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Social Media Settings</h4>

                                @php
                                    $data = $globalData->social;

                                    $socialMediaFields = [
                                        'facebook' => 'Facebook',
                                        'twitter' => 'Twitter',
                                        'instagram' => 'Instagram',
                                        'linkedin' => 'LinkedIn',
                                        'youtube' => 'YouTube',
                                    ];

                                @endphp

                                <form action="{{ route('admin.social-settings') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    @foreach ($socialMediaFields as $name => $label)
                                        <div class="row mb-4">
                                            <label for="{{ $name }}"
                                                class="col-sm-3 col-form-label">{{ $label }}</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="{{ $name }}"
                                                    name="{{ $name }}" placeholder="Enter {{ $label }}"
                                                    value="{{ old($name, $data?->$name) }}">
                                            </div>
                                        </div>
                                    @endforeach


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
