<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="images/x-icon" />
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
            <a href="/" title="Logo">
                <img src="/assets/signup/logo.svg" alt="Laplace Logo" class="logo">
            </a>
            <form class="my-form" id="loginForm"  action="{{ route('login') }}" method="POST">

                @csrf

                <div class="form-welcome-row">
                    <h1>Welcome back! &#128079;</h1>
                    <h2>Login with your account!</h2>
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

                
                <br>
                <div class="text-field">
                    <label for="email">Email</label>
                    <input type="email" id="loginEmail" name="email" autocomplete="off" placeholder="you@example.com"
                        required>
                </div>
<div class="text-field">
    <label for="loginPassword">Password</label>
    <div class="password-wrapper">
        <input id="loginPassword" type="password" name="password" placeholder="Your password">
        <span class="toggle-eye" onclick="toggleVisibility('loginPassword', 'eye-login')">
            <i id="eye-login" class="fa-solid fa-eye"></i>
        </span>
    </div>
</div>
                <div id="referral-code-field">
                    <div class="text-field">
                        <label for="referral-code">Referral Code</label>
                        <input id="loginReferralCode" type="text" name="referral-code"
                            placeholder="Enter referral code">
                    </div>
                </div>
                <div style="margin-top: 15px; display: flex; align-items: end; justify-content: flex-end;">
                    <a href="{{ route('password.forgot') }}" style="display: inline-block; margin-right: 100px; color: #363435; text-decoration: none;">Forgot Password?</a>
                </div>
                
                <div class="my-form__buttons">
                <button class="my-form__button" >
                    Sign In
                </button>
                </div>
                <div class="my-form__actions">
                    <div class="my-form__row">
                        <span>Don't have an account?</span>
                        <a href="{{ route('register') }}">
                            Sign Up
                        </a>
                    </div>
                </div>
            </form>
        </main>
        <aside class="info-side">
            <div class="video-wrapper">
                <img id="signupAltImage" src="/assets/signup/login_alt.png" alt="Signup Placeholder" class="placeholder-image">
                <dotlottie-player id="signupAnimation" src="/assets/signup/Login.json" background="transparent" speed="1" loop
                    autoplay style="display: none;"></dotlottie-player>
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