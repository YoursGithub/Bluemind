<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon" />
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

</head>

<style>
    .my-form__buttons{
        cursor: pointer;
    }
</style>

<style>
    .text-field {
  margin-bottom: 20px;
  position: relative;
}

.password-wrapper {
  position: relative;
}

.password-wrapper input {
  width: 100%;
  padding-right: 40px; /* Space for icon */
  padding: 10px;
  box-sizing: border-box;
}

.toggle-eye {
  position: absolute;
  right: 10px;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
  color: #666;
}

.error-message {
  color: red;
  font-size: 12px;
  margin-top: 4px;
  display: none; /* Show only when validation fails */
}

</style>

<body>
    <div class="form-wrapper">
        <main class="form-side">
            <a href="./" title="Logo">
                <img src="/assets/signup/logo.svg" alt="Laplace Logo" class="logo">
            </a>
<br>
            
            <form class="my-form" id="signupForm" action="{{ route('register') }}" method="POST">
                <div class="form-welcome-row">
                    <h1>Sign Up &#128075;</h1>
                    <h2>Create your account to get started!</h2>
                </div>


                @if ($errors->any())
                <div class="alert alert-danger" style="color: red">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif

                
                @if (session('success'))
                <div class="alert alert-success" style="color: green">
                    {{ session('success') }}
                </div>
                @endif

                @csrf
                <div class="text-field">
                    <label for="email">Name</label>
                    <input type="text"  name="name" placeholder="yourName" required>
                </div>


                <div class="text-field">
                    <label for="email">Email</label>
                    <input type="email" id="signupEmail" name="email" autocomplete="off" placeholder="name@organisation.com" required>
                    <div class="error-message">Email in incorrect format</div>
                </div>
                <div class="text-field">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="signupPhoneNumber" name="phone"  placeholder="Enter your phone number" required>
                    <div class="error-message">Invalid phone number</div>
                </div>
<div class="text-field">
    <label for="password">Password</label>
    <div class="password-wrapper">
        <input id="signupPassword" type="password" name="password" placeholder="Your password" title="Minimum 6 characters, at least 1 letter and 1 number">
        <span class="toggle-eye" onclick="toggleVisibility('signupPassword', 'eye1')">
            <i id="eye1" class="fa-solid fa-eye"></i>
        </span>
    </div>
    <div class="error-message">Minimum 6 characters, at least 1 letter and 1 number</div>
</div>

<div class="text-field">
    <label for="confirm-password">Confirm Password</label>
    <div class="password-wrapper">
        <input id="signupConfirmPassword" type="password" name="password_confirmation" placeholder="Confirm your password" required>
        <span class="toggle-eye" onclick="toggleVisibility('signupConfirmPassword', 'eye2')">
            <i id="eye2" class="fa-solid fa-eye"></i>
        </span>
    </div>
    <div class="error-message">Passwords do not match</div>
</div>
               
                <div style="margin-top: 15px; display: flex">
                    <input style="margin-right: 10px;" id="hasReferralCode" type="checkbox" name="referral-checkbox" onclick="toggleReferralCodeField()">
                    <label for="referral-code" style="display: inline-block; margin-right: 10px;">Do you have referral code?</label>
                </div>
                <div id="referral-code-field" style="display: none;">
                    <div class="text-field">
                        <label for="referral-code">Referral Code</label>
                        <input id="signupReferralCode" type="text" name="referral-code" placeholder="Enter referral code">
                        
                    </div>
                </div>
                <div class="my-form__buttons">              
                <button class="my-form__button">
                    Sign Up
                </button>
                </div>
                <div class="my-form__actions">
                    <div class="my-form__row">
                        <span>Already have an account?</span>
                        <a href="{{ route('login') }}" title="Login">
                            Login Here
                        </a>
                    </div>
                </div>
            </form>
        </main>
        <aside class="info-side">
            <div class="video-wrapper">
                <img id="signupAltImage" src="/assets/signup/signup_alt.png" alt="Signup Placeholder" class="placeholder-image">
                <dotlottie-player id="signupAnimation" src="/assets/signup/Signup.json" background="transparent" speed="1" loop autoplay style="display: none;"></dotlottie-player>
            </div>
        </aside>
    </div>
<script>
    function toggleVisibility(inputId, iconId) {
  const input = document.getElementById(inputId);
  const icon = document.getElementById(iconId);

  if (input.type === "password") {
    input.type = "text";
    icon.classList.remove("fa-eye");
    icon.classList.add("fa-eye-slash");
  } else {
    input.type = "password";
    icon.classList.remove("fa-eye-slash");
    icon.classList.add("fa-eye");
  }
}

</script>
    <script>
        function toggleReferralCodeField() {
            var referralCodeField = document.getElementById("referral-code-field");
            var referralCodeCheckbox = document.getElementById("hasReferralCode");
            if (referralCodeCheckbox.checked) {
                referralCodeField.style.display = "block";
            } else {
                referralCodeField.style.display = "none";
            }
        }

        window.addEventListener('load',function(){
            
            // Parse the URL query parameters
            const params = new URLSearchParams(window.location.search);

            // Check for the referral-code parameter
            const referralCode = params.get('code');
    
            if (referralCode) {
                // Select the checkbox, input field, and referral code field
                const checkbox = document.getElementById('hasReferralCode');
                const inputField = document.getElementById('signupReferralCode');
                const referralCodeField = document.getElementById('referral-code-field');
                
                // Set checkbox to checked
                checkbox.checked = true;

                // Populate the input field with the referral code
                inputField.value = referralCode;

                // Make the referral code field visible
                referralCodeField.style.display = 'block';
            }


        });



    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const lottiePlayer = document.getElementById("signupAnimation");
            const placeholderImage = document.getElementById("signupAltImage");

            // Event listener for when the Lottie animation is loaded and ready
            lottiePlayer.addEventListener('ready', () => {
                placeholderImage.style.display = 'none';
                lottiePlayer.style.display = 'block';
            });

            // Trigger the Lottie player to load the animation
            lottiePlayer.load();
        });

    </script>
    
   
</body>

</html>
