@extends('layout.app')



@section('main-section')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Add Transaction</h4>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('admin.create-transaction') }}" method="POST">
                                    @csrf


                                    <div class="row mb-4">
                                        <label for="refference_id" class="col-sm-3 col-form-label">Referrrence
                                            Id</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="refference_id"
                                                placeholder="Enter  Referrrence Id " name="refference_id">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="horizontal-user-input" class="col-sm-3 col-form-label">Select
                                            Trading</label>
                                        <div class="col-sm-9">
                                            <select name="trading" class="form-control" id="horizontal-user-input"
                                                required>
                                                <option value="" disabled selected>Please select trading</option>

                                                <option value="USDT">USDT</option>
                                                <option value="INR">INR</option>


                                            </select>
                                        </div>
                                    </div>



                                    <div class="row mb-4">
                                        <label for="horizontal-user-input" class="col-sm-3 col-form-label">Select
                                            Direction</label>
                                        <div class="col-sm-9">
                                            <select name="direction" class="form-control" id="horizontal-user-input"
                                                required>
                                                <option value="" disabled selected>Please select a direction</option>

                                                <option value="Buy Long">Buy Long</option>
                                                <option value="Close Long">Close Long</option>


                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="horizontal-amount-input" class="col-sm-3 col-form-label">Leverage</label>
                                        <div class="col-sm-9" style="display: flex">
                                            <div class="input-group-text" style="width: 10%">Cross</div>
                                            <input type="number" class="form-control" id="horizontal-amount-input"
                                                placeholder="Enter  leverage between 1 to 200 " name="leverage" min="1" max="200" style="width: 30%">
                                            <div class="input-group-text" style="width: 10%">X</div>

                                        </div>
                                    </div>


                                    <div class="row mb-4">
                                        <label for="horizontal-amount-input" class="col-sm-3 col-form-label">Profit</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="horizontal-amount-input"
                                                placeholder="Enter  profit " name="profit">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="horizontal-date-input" class="col-sm-3 col-form-label">Date</label>
                                        <div class="col-sm-9">
                                            <input type="datetime-local" class="form-control" id="horizontal-date-input"
                                                name="date">

                                        </div>
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

<script>

    
window.addEventListener('load',function(){

                // Parse the URL query parameters
                const params = new URLSearchParams(window.location.search);

                // Check for the referral-code parameter
                const refId = params.get('refId');

                if(refId){

                    const element = document.getElementById('refference_id')

                    element.value = refId ;
                }

});

</script>

@endsection