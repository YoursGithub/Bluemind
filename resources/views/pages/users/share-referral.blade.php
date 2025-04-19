@extends('layout.app')

@section('head-section')



@endsection

@section('main-section')

    @php

    $code = Auth::user()->sharingReferral?->code ;

    $url = route('register') . '?' . http_build_query(['code' => $code ]);



    @endphp


    <div class="main-content">


            <div class="page-content">

                <div class="container">
                    <div class="card  border-light p-4">

                        
                        <div class="mb-4">
                            <label for="referralCode" class="form-label fw-bold">Referral Code</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="referralCode" value="{{ $code }}" readonly>
                                <button class="btn btn-secondary" onclick="copyToClipboard('#referralCode')">
                                    <i class="fas fa-copy"></i>
                                </button>
                            </div>
                        </div>
                
                        <div class="mb-4">
                                        <label for="referralLink" class="form-label fw-bold">Referral Link</label>
                                        <textarea class="form-control" id="referralLink" rows="4" readonly>
                                    Join Blue Mind Now !
                                    {{ $url }}
                                                </textarea>
                        </div>
                        
                      

                        <div class="d-flex justify-content-start gap-3">
                            <!-- Copy Link Button -->
                            <button class="btn btn-outline-light" onclick="copyToClipboard('#referralLink')">
                                <i class="fas fa-lg fa-link"></i>
                            </button>
                            
                            <!-- Telegram Share -->
                            <a href="https://t.me/share/url?url={{ urlencode($url) }}" target="_blank" class="btn btn-outline-light">
                                <i class="fab fa-lg fa-telegram"></i>
                            </a>
                            
                            <!-- Facebook Share -->
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}" target="_blank" class="btn btn-outline-light">
                                <i class="fab fa-lg fa-facebook"></i>
                            </a>
                            
                            <!-- LinkedIn Share -->
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode($url) }}" target="_blank" class="btn btn-outline-light">
                                <i class="fab fa-lg fa-linkedin"></i>
                            </a>
                            
                            <!-- WhatsApp Share -->
                            <a href="https://wa.me/?text={{ urlencode($url) }}" target="_blank" class="btn btn-outline-light">
                                <i class="fab fa-lg fa-whatsapp"></i>
                            </a>
                            
                            <!-- Twitter Share -->
                            <a href="https://x.com/intent/tweet?url={{ urlencode($url) }}" target="_blank" class="btn btn-outline-light">
                                <i class="fab fa-lg fa-twitter"></i>
                            </a>
                        </div>


                    </div>
                </div>

                
            </div>

    </div>

@endsection

@section('script-section')

<script>
    function copyToClipboard(selector) {
        const text = document.querySelector(selector).value;

        navigator.clipboard.writeText(text).then(() => {

            alert('Copied to clipboard!');

            }).catch(err => {
            // Handle any errors that occur during the copy operation
            console.error("Failed to copy text: ", err);
        });

    }

   


</script>

@endsection
