@extends('layout.app')



@section('main-section')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Update Terms</h4>

                                <form action="{{ route('admin.update-terms' , $terms->id ) }}" method="POST">
                                    @csrf


                                    <div class="row mb-4">
                                        <label for="horizontal-name-input" class="col-sm-3 col-form-label">
                                            Heading
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="horizontal-name-input"
                                                placeholder="Enter Heading" name="heading" value="{{ $terms->heading }}">
                                        </div>
                                    </div>


                                    <div class="row mb-4">
                                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">
                                            Body
                                        </label>

                                        <textarea name="body" cols="30" rows="10">{{ $terms->body }}</textarea>


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
