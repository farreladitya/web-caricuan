<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>{{ config('app.name', 'Laravel') }}</title>

     <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>

    <!-- Styles -->
    <link href="{{ asset('style.css') }}" rel="stylesheet">
  </head>

  <body>
    <main class="py-4">
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup ">

          {{-- START SIGN IN --}}
          <form method="POST" action="{{ route('login') }}" class="sign-in-form">
            <img src="img/cclogo1.png" class="image" alt="" style="width: 50%; margin-bottom: 10px"/>
            <h2 class="title" style="text-align: center"> Welcome to Cari.Cuan</h2>
            <h2 class="title" style="text-align: center">{{ __('Login') }}</h2>
            @csrf
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Email" id="email" type="email"  class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" type="password" placeholder="Password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                </div>
                    @if (Route::has('password.request'))
                        <a class="btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert" style="color: red">
               <strong> {{ $message }}</strong>
            </span>
            @enderror
            @error('password')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
            </form>
            {{-- END SIGN IN --}}

            {{-- START SIGN UP --}}
            <form method="POST" action="{{ route('register') }}" class="sign-up-form">
                @csrf
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="name" placeholder="Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="email" placeholder="Email Address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input id="username" placeholder="Username" type="username" class="form-control" name="username" value="{{ old('username') }}" required autocomplete="username">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-check">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Job Seeker
                        </label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="1" checked>
                      </div>
                </div>

                    <div class="col-6">
                        <div class="form-check">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Company
                            </label>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="2">
                          </div>
                    </div>
            </div>

              <button type="submit" class="btn">
                {{ __('Register') }}
            </button>
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            {{-- Error Message --}}
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

          </form>
          {{-- END SIGN UP --}}
        </div>
      </div>


      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Join With Us!</h3>
            <p>
              Cari.Cuan adalah sebuah platform yang menghubungkan para pelamar dengan penyedia lapangan pekerjaan
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
            Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    </main>
    <script type="text/javascript" src="{{ asset('app.js') }}"></script>
</body>
</html>
