@extends('layout.app')



@section('main-section')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Update Transaction</h4>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                    </ul>
                                </div>
                            @endif
                            
                            <form  action="{{ route('admin.update-transaction',['transac'=>$transac->id]) }}" method="POST">
                                @csrf


                                <div class="row mb-4">
                                    <label for="horizontal-amount-input" class="col-sm-3 col-form-label">Referrrence
                                        Id</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="horizontal-amount-input"
                                            placeholder="Enter  Referrrence Id " name="refference_id" value="{{ $transac->investment->payment_id }}">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="horizontal-user-input" class="col-sm-3 col-form-label">Select
                                        Trading</label>
                                    <div class="col-sm-9">
                                        <select name="trading" class="form-control" id="horizontal-user-input"
                                            required>

                                            <option value="USDT" {{ $transac->trading == "USDT" ? "selected" : "" }}>USDT</option>
                                            <option value="INR" {{ $transac->trading == "INR" ? "selected" : "" }}>INR</option>


                                        </select>
                                    </div>
                                </div>



                                <div class="row mb-4">
                                    <label for="horizontal-user-input" class="col-sm-3 col-form-label">Select
                                        Direction</label>
                                    <div class="col-sm-9">
                                        <select name="direction" class="form-control" id="horizontal-user-input"
                                            required>

                                            <option value="Buy Long" {{ $transac->direction == "Buy Long" ? "selected" : "" }}>Buy Long</option>
                                            <option value="Close Long"  {{ $transac->direction == "Close Long" ? "selected" : "" }}>Close Long</option>


                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="horizontal-amount-input" class="col-sm-3 col-form-label">Leverage</label>
                                    <div class="col-sm-9" style="display: flex">
                                        <div class="input-group-text" style="width: 10%">Cross</div>
                                        <input type="number" class="form-control" id="horizontal-amount-input"
                                            placeholder="Enter  leverage between 1 to 200 " name="leverage" min="1" max="200" style="width: 30%" value="{{ $transac->leverage }}">
                                        <div class="input-group-text" style="width: 10%">X</div>

                                    </div>
                                </div>


                                <div class="row mb-4">
                                    <label for="horizontal-amount-input" class="col-sm-3 col-form-label">Profit</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="horizontal-amount-input"
                                            placeholder="Enter  profit " name="profit" value="{{ $transac->profit }}">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="horizontal-date-input" class="col-sm-3 col-form-label">Date</label>
                                    <div class="col-sm-9">
                                        <input type="datetime-local" class="form-control" id="horizontal-date-input"
                                            name="date" value="{{ $transac->created_at }}">

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