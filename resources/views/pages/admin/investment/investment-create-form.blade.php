@extends('layout.app')



@section('main-section')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Add Capital</h4>
                            

                            <form action="{{ route('admin.create-investment') }}" method="POST">
                                @csrf
                               

                                <div class="row mb-4">
                                    <label for="horizontal-user-input" class="col-sm-3 col-form-label">Select User</label>
                                    <div class="col-sm-9">
                                        <select name="user" class="form-control" id="horizontal-user-input" required>
                                            <option value="" disabled selected>Please select an user</option>
                                            @foreach ( $users  as $user )
                                                
                                            <option value="{{ $user->id }}">{{ $user->name }} || {{ $user->email }} || {{ $user->phone }} </option>

                                            @endforeach

                           
                                        </select>
                                    </div>
                                </div>
                                
                                 
                                <div class="row mb-4">
                                    <label for="horizontal-user-input" class="col-sm-3 col-form-label">Select Currency</label>
                                    <div class="col-sm-9">
                                        <select name="currency" class="form-control" id="horizontal-user-input" required>
                                            <option value="" disabled selected>Please select a currency</option>
                                         
                                            <option value="USDT">USDT</option>
                                            <option value="INR">INR</option>

                           
                                        </select>
                                    </div>
                                </div>
                                
                                  
                                <div class="row mb-4">
                                    <label for="horizontal-amount-input" class="col-sm-3 col-form-label">Amount</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="horizontal-amount-input" placeholder="Enter  Amount " name="amount">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="horizontal-date-input" class="col-sm-3 col-form-label">Date</label>
                                    <div class="col-sm-9">
                                        <input 
                                        type="datetime-local" 
                                        class="form-control" 
                                        id="horizontal-date-input" 
                                        name="date" 
                                    >
                                    
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