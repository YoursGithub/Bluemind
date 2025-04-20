@extends('layout.app')



@section('main-section')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            @isset($kycDetails)
                
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">KYC Information of {{ Str::title($user->name) }}</h4>

                                <div class="table-responsive">
                                    <table class="table table-nowrap mb-0">
                                        <tbody>
                                          
                                           @php
                                               $arr = collect(['id','is_kyc_verified','user_id','created_at','updated_at']) ;
                                           @endphp

                                            @foreach ( $kycDetails->toArray() as $key => $val )

                                                @if ($arr->contains($key))
                                                    
                                                    @continue

                                                @endif
                                                
                                            <tr>
                                                <th scope="row">{{ Str::title(Str::replace("_"," ",$key)) }} :</th>

                                                @if (Str::startsWith($val ,"/images/documents/"))
                                                    
                                                    <td><img src="{{ $val }}" alt="" style="max-width: 500px; max-height : 300px"></td>

                                                @else

                                                    <td>{{ $val }}</td>

                                                @endif

                                            </tr>

                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>

                                @if (!$kycDetails->is_kyc_verified)
                                    
                                <h4 class="card-title mt-4 mb-4">Accpet Kyc details of {{ Str::title($user->name) }} ?</h4>


                                <div class="d-flex flex-wrap gap-2">

                                    <a href="{{ route('admin.user-kyc-status',['status'=>'accept','kycId'=>$kycDetails->id]) }}">

                                        <button type="submit" class="btn btn-success waves-effect waves-light">
                                            Accpet
                                        </button>
                                    </a>

                                    <a href="{{ route('admin.user-kyc-status',['status'=>'reject','kycId'=>$kycDetails->id]) }}">

                                        <button type="reset" class="btn btn-danger waves-effect">
                                            Reject
                                        </button>
                                    </a>

                                </div>

                                @endif

                            </div>
                        </div>
                        
                    </div>
                </div>

            @else

            <div class="row">
                <h4>No Kyc Details Found!!</h4>
            </div>

            @endisset

                
        </div>
    </div>

</div>

@endsection