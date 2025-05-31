@extends('layout.app')



@section('main-section')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Download Settings</h4>

                                @php
                                    $data = $globalData->download;
                                @endphp

                                <form id="pdf-form" action="{{ route('admin.download-settings') }}" method="POST"
                                    enctype="multipart/form-data" class="container my-4">

                                    @csrf



                                    <div class="mb-4">
                                        <label class="form-label">Business Proposal :</label>
                                        <input type="file" name="business_proposal" accept="application/pdf"
                                            class="form-control pdf-input">
                                        <iframe src="{{ $data?->business_proposal }}" class="pdf-preview w-100 border mt-2"
                                            height="400" style=""></iframe>
                                    </div>



                                    <div class="mb-4">
                                        <label class="form-label">Referral PLan :</label>
                                        <input type="file" name="referral_plan" accept="application/pdf"
                                            class="form-control pdf-input">
                                        <iframe src="{{ $data?->referral_plan }}" class="pdf-preview w-100 border mt-2"
                                            height="400" style=""></iframe>
                                    </div>



                                    <div class="mb-4">
                                        <label class="form-label">Leagal Documentsz :</label>
                                        <input type="file" name="trading_investment" accept="application/pdf"
                                            class="form-control pdf-input">
                                        <iframe src="{{ $data?->trading_investment }}" class="pdf-preview w-100 border mt-2"
                                            height="400" style=""></iframe>
                                    </div>


                                    
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
    <script>
        document.querySelectorAll('.pdf-input').forEach((input, index) => {
            const preview = input.parentElement.querySelector('.pdf-preview');

            input.addEventListener('change', () => {
                const file = input.files[0];
                if (file && file.type === 'application/pdf') {
                    preview.src = URL.createObjectURL(file);
                    preview.style.display = 'block';
                } else {
                    preview.style.display = 'none';
                }
            });
        });
    </script>
@endsection
