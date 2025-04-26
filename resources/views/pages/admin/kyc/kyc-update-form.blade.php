@extends('layout.app')



@section('main-section')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">KYC Form</h4>
                            

                            <form action="{{ route('admin.user-kyc-update-post',['kycId'=>$kycDetails->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h4 class="card-title mb-4" style="margin: 60px 0" >Bank Details</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-accountName-input">Account Name</label>
                                            <input type="text" class="form-control" id="basicpill-accountName-input" placeholder="Enter Account Name" name="account_name" value="{{ $kycDetails['account_name'] }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-accountNumber-input">Account Number</label>
                                            <input type="text" class="form-control" id="basicpill-accountNumber-input" placeholder="Enter Account Number" name="account_number" value="{{ $kycDetails['account_number'] }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-branchName-input">Branch Name</label>
                                            <input type="text" class="form-control" id="basicpill-branchName-input" placeholder="Enter Branch Name" name="branch_name" value="{{ $kycDetails['branch_name'] }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-ifsc-input">IFSC Code</label>
                                            <input type="text" class="form-control" id="basicpill-ifsc-input" placeholder="Enter IFSC Code" name="ifsc_code" value="{{ $kycDetails['ifsc_code'] }}">
                                        </div>
                                    </div>
                                </div>

                                <h4 class="card-title mb-4" style="margin: 60px 0">Aadhaar Details</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-adhaar_name-input">Aadhaar Name</label>
                                            <input type="text" class="form-control" id="basicpill-adhaar_name-input" placeholder="Enter Aadhaar Name" name="adhaar_name" value="{{ $kycDetails['adhaar_name'] }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-adhaar_number-input">Aadhaar Number</label>
                                            <input type="text" class="form-control" id="basicpill-adhaar_number-input" placeholder="Enter Aadhaar Number" name="adhaar_number" value="{{ $kycDetails['adhaar_number'] }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-address-input">Address</label>
                                            <input type="text" class="form-control" id="basicpill-address-input" placeholder="Enter Address" name="address" value="{{ $kycDetails['address'] }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-pin_code-input">Pin Code</label>
                                            <input type="text" class="form-control" id="basicpill-pin_code-input" placeholder="Enter Pin Code" name="pin_code" value="{{ $kycDetails['pin_code'] }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <!-- Aadhaar Card Upload -->
                                    <label  class="col-sm-3 col-form-label">Upload Aadhaar Card Front</label>
                                    <x-image-component  :name="'adhaar_card_front'" :value="$kycDetails['adhaar_card_front']" />

                                </div>

                                
                                <div class="row mb-4">
                                    <!-- Aadhaar Card Upload -->
                                    <label  class="col-sm-3 col-form-label">Upload Aadhaar Card Back</label>
                                 
                                    <x-image-component  :name="'adhaar_card_back'" :value="$kycDetails['adhaar_card_back']" />

                                </div>



                                <h4 class="card-title mb-4" style="margin: 100px 0">Pan Card Details</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-pan_name-input">Pan Name</label>
                                            <input type="text" class="form-control" id="basicpill-pan_name-input" placeholder="Enter Pan  Name" name="pan_name" value="{{ $kycDetails['pan_name'] }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="basicpill-pan_number-input">Pan Number</label>
                                            <input type="text" class="form-control" id="basicpill-pan_number-input" placeholder="Enter Pan Number" name="pan_number" value="{{ $kycDetails['pan_number'] }}">
                                        </div>
                                    </div>
                                </div>
                           
                                
                                <div class="row mb-4">
                                    <!-- PAN Card Upload -->
                                    <label  class="col-sm-3 col-form-label">Upload PAN Card</label>
                                
                                    <x-image-component  :name="'pan_card'" :value="$kycDetails['pan_card']" />

                                </div>


                                <h4 class="card-title mb-4" style="margin: 100px 0">Personal Details</h4>
                                
                       
                                <div class="row">
                                
                                    <div class="col-lg-6 mt-4">
                                        <label for="horizontal-user-input" class="col-sm-3 col-form-label">Annual Income</label>
                                        <div class="col-sm-9">
                                            <select name="annual_income" class="form-control" id="horizontal-user-input" required>
                                                <option value="0-1 lakh" {{ "0-1 lakh" == $kycDetails['annual_income'] ? "selected" : "" }}>0-1 lakh</option>
                                                <option value="1-5 lakh" {{ "1-5 lakh" == $kycDetails['annual_income'] ? "selected" : "" }}>1-5 lakh</option>
                                                <option value="5-10 lakh" {{ "5-10 lakh" == $kycDetails['annual_income'] ? "selected" : "" }}>5-10 lakh</option>
                                                <option value="More than 10 lakhs" {{ "More than 10 lakhs" == $kycDetails['annual_income'] ? "selected" : "" }}>More than 10 lakhs</option>
                                            </select>
                                        </div>
                                    </div>

                                   


                                </div>

                          

                                <div class="row mb-4" style="margin: 20px 0">
                                    <!-- PAN Card Upload -->
                                    <label  class="col-sm-3 col-form-label">Upload Selfie</label>
                                    <x-image-component  :name="'selfie'" :value="$kycDetails['selfie']" />

                                 
                                </div>

                                <h4 class="card-title mb-4" style="margin: 100px 0">Nominee Details</h4>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicpill-pan_name-input">Nominee Name</label>
                                                    <input type="text" class="form-control"
                                                        id="basicpill-nominee_name-input" placeholder="Enter Nominee  Name"
                                                        name="nominee_name" value="{{ $kycDetails['nominee_name'] }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicpill-nominee_phone-input">Nominee Phone</label>
                                                    <input type="text" class="form-control"
                                                        id="basicpill-nominee_phone-input" placeholder="Enter Nominee Phone"
                                                        name="nominee_phone" value="{{ $kycDetails['nominee_phone'] }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicpill-nominee_adhaar_number-input">Nominee Aadhaar Number</label>
                                                    <input type="text" class="form-control"
                                                        id="basicpill-nominee_adhaar_number-input" placeholder="Enter Nominee  Aadhaar Number "
                                                        name="nominee_adhaar_number" value="{{ $kycDetails['nominee_adhaar_number'] }}">
                                                </div>
                                            </div>

                                           
                                        </div>

                                    <div class="row mb-4">
                                        <!-- Aadhaar Card Upload -->
                                        <label class="col-sm-3 col-form-label">Upload  Nominee Aadhaar Card Front</label>
                                        <x-image-component  :name="'nominee_adhaar_card_front'" :value="$kycDetails['nominee_adhaar_card_front']" />

                                    </div>

                                    <div class="row mb-4">
                                        <!-- Aadhaar Card Upload -->
                                        <label class="col-sm-3 col-form-label">Upload Nominee Aadhaar Card Back</label>
                                        <x-image-component  :name="'nominee_adhaar_card_back'" :value="$kycDetails['nominee_adhaar_card_back']" />

                                    </div>

                                    <div class="row mb-4" style="margin: 20px 0">
                                        <!-- PAN Card Upload -->
                                        <label class="col-sm-3 col-form-label">Upload Nominee Selfie</label>
                                        <x-image-component  :name="'nominee_selfie'" :value="$kycDetails['nominee_selfie']" />

                                    </div>

                                    <div class="row mb-4" style="margin: 20px 0">
                                        <!-- PAN Card Upload -->
                                        <label class="col-sm-3 col-form-label">Payment Screenshot</label>
                                        <x-image-component  :name="'payment_screenshot'" :value="$kycDetails['payment_screenshot']" />

                                    </div>

                                

                                <div class="row justify-content-end" style="margin: 100px 0;">
                                    <div class="col-sm-9">
                                        <div>
                                            <button type="submit" class="btn btn-primary w-lg ">Submit</button>
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