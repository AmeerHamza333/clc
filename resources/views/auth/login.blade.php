<x-guest-dashboard-layout>
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
           <div class="container">
              <div class="loginbox">
                 <div class="login-left">
                    <img class="img-fluid mb-5" src="assets/img/clc-logo-removebg.png" alt="Logo" >
                 </div>
                 <div class="login-right">
                    <div class="login-right-wrap">
                       <h1>Login</h1>
                       <p class="account-subtitle">Access to dashboard</p>
                       <x-auth-session-status class="mb-4" :status="session('status')" />
                       <x-auth-validation-errors class="mb-4" :errors="$errors" />
                       <form class="needs-validation " novalidate action="{{ route('login') }}" method="POST" >
                        @csrf
                          <div class="form-group">
                             <input id="validationCustom01" name="email" class="form-control" type="email" placeholder="Email"
                             value="{{ old('email') }}"  required>
  
                             <div class="invalid-feedback">
                                Email field is required.
                             </div>
                          </div>
  
                          <div class="form-group">
                             <input class="form-control" id="inputValidationEx2" name="password" type="password" placeholder="Password"
                                required>
                             <div class="invalid-feedback">
                                Password field is required.
                             </div>
                          </div>
                          <div class="form-group">
                             <button class="btn btn-primary btn-block" type="submit">Login</button>
                          </div>
                       </form>
                       @if (Route::has('password.request'))
                       <div class="text-center forgotpass"><a href="{{ route('password.request') }}">Forgot Password?</a></div>
                           {{-- <a class="text-center underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                 {{ __('Forgot your password?') }}
                           </a> --}}
                        @endif
                      
                       <div class="login-or">
                          <span class="or-line"></span>
                          <span class="span-or">or</span>
                       </div>
                       {{-- <div class="social-login">
                          <span>Login with</span>
                          <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i
                                class="fab fa-google"></i></a>
                       </div> --}}
                       <div class="text-center dont-have">Don’t have an account? <a href="{{ route('register') }}">Signup</a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
 
 </x-guest-dashboard-layout>


{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
